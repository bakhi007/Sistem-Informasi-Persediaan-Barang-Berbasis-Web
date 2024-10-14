<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

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
        
        // Mengambil data penjualan dengan filter
        $salesQuery = Sale::with('product');
    
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
        $sales = $salesQuery->paginate(perPage: 10)->appends(['sort' => $sort, 'search' => $search]);
        
        return view('dashboard.transaksi.sale.index', compact('sales'), ['title' => 'Transaksi Penjualan']);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua produk
        $products = Product::all();
        
        return view('dashboard.transaksi.sale.create', [
            'title' => 'Input Penjualan / Kasir',
            'products' => $products,
            // Jika ingin mengirim nilai default, bisa ditambahkan di sini
            'default_jumlah_harga_jual' => 0, // Contoh nilai default
            'default_diskon' => 0, // Contoh nilai default
            'default_total_harga_jual' => 0, // Contoh nilai default
            'default_uang_terima' => 0, // Contoh nilai default
            'default_kembalian' => 0, // Contoh nilai default
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
    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'product_id' => 'required|exists:products,id',
        'harga_jual' => 'required|numeric',
        'stok_keluar' => 'required|numeric|min:1',
        'jumlah_harga_jual' => 'required|numeric',
        'diskon' => 'nullable|numeric', // Menjadikan diskon opsional
        'total_harga_jual' => 'required|numeric',
        'uang_terima' => 'required|numeric|min:' . $request->input('total_harga_jual'), // Validasi uang terima
        'kembalian' => 'required|numeric',
        'tanggal_penjualan' => 'required|date',
    ]);

    // Ambil produk berdasarkan product_id
    $product = Product::find($validatedData['product_id']);

    // Validasi stok_keluar tidak melebihi sisa_stok
    if ($validatedData['stok_keluar'] > $product->sisa_stok) {
        return redirect()->back()->withErrors([
            'stok_keluar' => 'Stok keluar tidak boleh lebih dari ' . $product->sisa_stok,
        ])->withInput();
    }

    // Buat catatan penjualan
    $sale = Sale::create($validatedData);

    // Perbarui stok produk
    $product->sisa_stok -= $sale->stok_keluar; // Kurangi stok
    $product->save();

    return redirect('/dashboard/transaksi/sale')->with(['success' => 'Post baru berhasil ditambahkan!']);
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
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
