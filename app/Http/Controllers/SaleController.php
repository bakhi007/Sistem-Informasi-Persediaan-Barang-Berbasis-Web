<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil parameter sort
        $sort = $request->get('sort');
        
        // Ambil parameter pencarian
        $search = $request->get('search');
        
        // Ambil parameter rentang waktu
        $range = $request->get('range');
        
        // Mengambil data penjualan dengan filter
        $salesQuery = Sale::with('product');
        
        // Mengambil data nota dengan filter berdasarkan rentang waktu
        $notasQuery = Nota::query();
    
        // Menentukan rentang waktu untuk filter
        if ($range) {
            switch ($range) {
                case 'today':
                    $notasQuery->whereDate('created_at', now());
                    break;
                case 'last_7_days':
                    $notasQuery->where('created_at', '>=', now()->subDays(7));
                    break;
                case 'last_30_days':
                    $notasQuery->where('created_at', '>=', now()->subDays(30));
                    break;
                case 'last_6_months':
                    $notasQuery->where('created_at', '>=', now()->subMonths(6));
                    break;
                case 'last_1_year':
                    $notasQuery->where('created_at', '>=', now()->subYear());
                    break;
            }
        }
    
        // Ambil data nota dengan pagination (5 data per halaman)
    $notas = $notasQuery->orderBy('created_at', 'desc')->paginate(5)->appends(['range' => $range, 'sort' => $sort, 'search' => $search]);
    
        // Jika ada parameter pencarian, tambahkan kondisi where untuk mencari berdasarkan nama produk
        if ($search) {
            $salesQuery->whereHas('product', function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            });
        }
        
        // Menentukan urutan berdasarkan filter
        if ($sort === 'stok_keluar_desc') {
            $salesQuery->orderBy('stok_keluar', 'desc');
        } elseif ($sort === 'stok_keluar_asc') {
            $salesQuery->orderBy('stok_keluar', 'asc');
        } elseif ($sort === 'total_harga_jual_desc') {
            $salesQuery->orderBy('total_harga_jual', 'desc');
        } elseif ($sort === 'total_harga_jual_asc') {
            $salesQuery->orderBy('total_harga_jual', 'asc');
        } elseif ($sort === 'created_at_desc') {
            $salesQuery->orderBy('created_at', 'desc');
        } elseif ($sort === 'created_at_asc') {
            $salesQuery->orderBy('created_at', 'asc');
        } else {
            $salesQuery->orderBy('created_at', 'desc');
        }
        
        // Ambil data penjualan dengan pagination dan tambahkan parameter ke URL
        $sales = $salesQuery->paginate(10)->appends(['sort' => $sort, 'search' => $search]);
    
        return view('dashboard.transaksi.sale.index', compact('notas', 'sales'), ['title' => 'Transaksi Penjualan']);
    }     
    
    /**
     * Show the form for creating a new resource.
     */
    // create untuk menampilkan table kasir
    public function create(Request $request)
{
    // Ambil semua produk
    $products = Product::all();
    
    // Ambil token dari URL 
    $validatedData['token'] = $request->input('id');
    
    // Ambil data sales berdasarkan token
    $sales = Sale::with('product')->where('token', $validatedData['token'])->get();
    
    // Hitung total jumlah_harga_jual dan total diskon berdasarkan token
    $totalJumlahHarga = Sale::where('token', $validatedData['token'])->sum('jumlah_harga_jual');
    $totalDiskon = Sale::where('token', $validatedData['token'])->sum('diskon');
    
    // Hitung total bayar sebagai hasil pengurangan dari total jumlah harga dan total diskon
    $totalBayar = $totalJumlahHarga - $totalDiskon;

    return view('dashboard.transaksi.sale.create', [
        'title' => 'Input Penjualan / Kasir',
        'products' => $products,
        'sales' => $sales,
        'default_jumlah_harga_jual' => $totalJumlahHarga, // Total dari kolom jumlah_harga_jual
        'default_diskon' => $totalDiskon, // Total dari kolom diskon
        'default_total_harga_jual' => $totalBayar, // Hasil pengurangan untuk Total Bayar
        'default_uang_terima' => 0, // Contoh nilai default
        'default_kembalian' => 0, // Contoh nilai default
        'token' => $request->input('id'), // Token dari URL
    ]);
}




    public function getProduct($id)
    {
    $product = Product::findOrFail($id);
    return response()->json(['harga_jual' => $product->harga_jual]);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    // store untuk menambahkan data ke dalam table
    public function store(Request $request)
    {
        // Debug: periksa semua input yang diterima
        // dd($request->all()); // This will show all data coming into this method
    
        // Cek tipe form berdasarkan input 'form_type'
        $formType = $request->input('form_type');
        $token = $request->input('id');
    
        if ($formType === 'form1') {
            // Validasi untuk form 1
            $validatedData = $request->validate([
                'product_id' => 'required|exists:products,id',
                'harga_jual' => 'required|numeric',
                'stok_keluar' => 'required|numeric|min:1',
                'jumlah_harga_jual' => 'required|numeric',
                'diskon' => 'nullable|numeric',
                'tanggal_penjualan' => 'required|date',
            ]);
    
            // Ambil token dari URL (parameter id)
            $validatedData['token'] = $request->input('id'); // Extract token from 'id'
    
            // Cek apakah token kosong
            if (empty($validatedData['token'])) {
                return redirect()->back()->withErrors(['token' => 'Token tidak ditemukan.'])->withInput();
            }
    
            // Lanjutkan penyimpanan data ke tabel sales
            $product = Product::find($validatedData['product_id']);
            if ($validatedData['stok_keluar'] > $product->sisa_stok) {
                return redirect()->back()->withErrors(['stok_keluar' => 'Stok keluar tidak boleh lebih dari ' . $product->sisa_stok])->withInput();
            }
    
            $sale = Sale::create($validatedData);
            $product->sisa_stok -= $sale->stok_keluar;
            $product->save();
    
            return redirect('/dashboard/transaksi/sale/create?id=' . $validatedData['token']);
            // return redirect('/dashboard/transaksi/sale/create?id=' . $validatedData['token'])->with(['success' => 'Post baru berhasil ditambahkan!']);
    
        } elseif ($formType === 'form2') {
           // Periksa apakah ada data di tabel sales dengan token
            $salesCount = Sale::where('token', $token)->count();

            if ($salesCount === 0) {
                return redirect()->back()
                    ->withErrors(['sales' => 'Tidak dapat menyimpan data.'])
                    ->withInput();
            }

            // Validasi untuk form 2
            $validatedData = $request->validate([
                'total_jumlah_harga' => 'required|numeric',
                'total_diskon' => 'nullable|numeric',
                'total_bayar' => 'required|numeric',
                'uang_terima' => 'required|numeric',
                'kembalian' => 'required|numeric',
            ]);
    
            // Ambil token dari URL (parameter id)
            $validatedData['token'] = $request->input('id'); // Extract token from 'id'
    
            // Debug: periksa nilai token dari input
            // dd($validatedData['token']); // This will show if the correct token is captured
    
            // Cek jika token kosong
            if (empty($validatedData['token'])) {
                return redirect()->back()->withErrors(['token' => 'Token tidak ditemukan.'])->withInput();
            }
    
            // Simpan data ke tabel notas
            Nota::create([
                'token' => $validatedData['token'], // Ensure this is the correct token
                'total_jumlah_harga' => $validatedData['total_jumlah_harga'],
                'total_diskon' => $validatedData['total_diskon'],
                'total_bayar' => $validatedData['total_bayar'],
                'uang_terima' => $validatedData['uang_terima'],
                'kembalian' => $validatedData['uang_terima'] - $validatedData['total_bayar'],
                // 'kembalian' => $validatedData['kembalian'],
            ]);
    
            return redirect('/dashboard/report/sale?id=' . $validatedData['token']);
            // return redirect('/dashboard/report/sale?id=' . $validatedData['token'])->with(['success' => 'Data nota berhasil disimpan!']);
        } 
    
        return redirect()->back()->withErrors(['form_type' => 'Form type tidak valid.']);
    }
    



    
    




    

//     public function store(Request $request)
// {
//     // Validasi input
//     $validatedData = $request->validate([
//         'product_id' => 'required|exists:products,id',
//         'harga_jual' => 'required|numeric',
//         'stok_keluar' => 'required|numeric|min:1',
//         'jumlah_harga_jual' => 'required|numeric',
//         'diskon' => 'nullable|numeric', // Menjadikan diskon opsional
//         'total_harga_jual' => 'required|numeric',
//         'uang_terima' => 'required|numeric',
//         'kembalian' => 'required|numeric',
//         'tanggal_penjualan' => 'required|date',
//     ]);

//     // Ambil produk berdasarkan product_id
//     $product = Product::find($validatedData['product_id']);

//     // Validasi stok_keluar tidak melebihi sisa_stok
//     if ($validatedData['stok_keluar'] > $product->sisa_stok) {
//         return redirect()->back()->withErrors([
//             'stok_keluar' => 'Stok keluar tidak boleh lebih dari ' . $product->sisa_stok,
//         ])->withInput();
//     }

//     // Buat catatan penjualan
//     $sale = Sale::create($validatedData);

//     // Perbarui stok produk
//     $product->sisa_stok -= $sale->stok_keluar; // Kurangi stok
//     $product->save();

//     return redirect('/dashboard/transaksi/sale')->with(['success' => 'Post baru berhasil ditambahkan!']);
// }


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // Ambil data dari tabel sales dengan relasi product dan urutkan berdasarkan created_at (desc)
        $query = Sale::with('product')->orderBy('created_at', 'desc');
    
        // Filter berdasarkan tanggal jika parameter start_date dan end_date tersedia
        if ($request->has(['start_date', 'end_date'])) {
            $endDate = Carbon::parse($request->end_date)->endOfDay(); // Mengambil akhir hari
            $query->whereBetween('created_at', [$request->start_date, $endDate]);
        }
    
        // Eksekusi query dan ambil data
        $sales = $query->get();
    
        // Kembalikan data ke view
        return view('dashboard.report.sale.produk', [
            'sales' => $sales, // Data langsung dari tabel sales
            'title' => 'Produk Terjual',
        ]);
    }

    public function exportPdf(Request $request)
{
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    // Dapatkan data nota berdasarkan rentang tanggal
    $sales = Sale::whereBetween('created_at', [$startDate, $endDate])->get();
    $title = 'Laporan Nota Penjualan';

    // Hitung total pendapatan
    $totalPendapatan = $sales->sum('total_bayar');

    // Load view dan kirim data ke view
    $pdf = Pdf::loadView('pdf.export-sold', [
            'sales' => $sales,
            'title' => $title,
            'totalPendapatan' => $totalPendapatan
        ])
        ->setPaper('a4', 'portrait')
        ->setOptions(['defaultFont' => 'sans-serif']);

    // Download PDF
    return $pdf->download('laporan_produk_penjualan.pdf');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $sale = Sale::findOrFail($id);
    $sale->delete();

    return response()->json(['message' => 'Data berhasil dihapus'], 200);
}

    
    

    
}
