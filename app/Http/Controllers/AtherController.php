<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Ather;
use App\Models\Product;
use App\Models\Production;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AtherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
{
    // Ambil rentang waktu dari request
    $timeRange = $request->get('time_range');
    $query = Ather::with(['product', 'type']);

    // Ambil parameter pencarian
    $search = $request->get('search');

    // Filter berdasarkan parameter pencarian
    if ($search) {
        $query->whereHas('product', function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%");
        });
    }

    // Sesuaikan query berdasarkan rentang waktu
    if ($timeRange === 'today') {
        $query->whereDate('tanggal_keluar', now());
    } elseif ($timeRange === 'last_7_days') {
        $query->where('tanggal_keluar', '>=', now()->subDays(7));
    } elseif ($timeRange === 'last_month') {
        $query->where('tanggal_keluar', '>=', now()->subMonth());
    } elseif ($timeRange === 'last_6_months') {
        $query->where('tanggal_keluar', '>=', now()->subMonths(6));
    } elseif ($timeRange === 'last_year') {
        $query->where('tanggal_keluar', '>=', now()->subYear());
    }

    // Urutkan berdasarkan tanggal keluar terbaru
    $query->orderBy('tanggal_keluar', 'desc');

    // Mengambil data dari tabel athers dengan pagination
    $athers = $query->paginate(5)->appends($request->query()); // Tetapkan query string ke pagination

    // Mengembalikan view dengan data athers dan title
    return view('dashboard.transaksi.ather.index', compact('athers'))
        ->with('title', 'Transaksi Lain');
}
    

    /**
     * Show the form for creating a new resource.
     */
    // eror lazy load disabled
    // public function create()
    // {
    //   return view('dashboard.transaksi.ather.create', ['title' => 'Input Transaki Lain', 'productions' => Production::all(), 'types' => Type::all()]);
    // }

    // perbaikan eror lazy load disabled
    public function create()
{
    return view('dashboard.transaksi.ather.create', [
        'title' => 'Input Transaksi Lain',
        'productions' => Production::with('product')->get(), // Eager load relasi product
        'types' => Type::all(),
    ]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'product_id' => 'required|exists:products,id',
        'type_id' => 'required|exists:types,id',
        'harga_jual' => 'required|numeric',
        'stok_keluar' => 'required|numeric|min:1',
        'tanggal_keluar' => 'required|date',
    ]);

    // Ambil data production berdasarkan product_id
    $production = Production::where('product_id', $validatedData['product_id'])->first();

    if (!$production) {
        return redirect()->back()->withErrors([
            'product_id' => 'Produk tidak ditemukan pada stok produksi.',
        ])->withInput();
    }

    // Validasi stok_keluar tidak melebihi stok_masuk
    if ($validatedData['stok_keluar'] > $production->stok_masuk) {
        return redirect()->back()->withErrors([
            'stok_keluar' => 'Stok keluar tidak boleh lebih dari ' . $production->stok_masuk,
        ])->withInput();
    }

    // Tambahkan kode_produksi ke data yang akan disimpan
    $validatedData['kode_produksi'] = $production->kode_produksi;

    // Buat catatan transaksi
    $ather = Ather::create($validatedData);

    // Perbarui stok di tabel production
    $production->stok_masuk -= $ather->stok_keluar; // Kurangi stok produksi
    $production->save();

    // Perbarui stok di tabel products
    $product = Product::find($validatedData['product_id']);
    if ($product) {
        $product->sisa_stok -= $ather->stok_keluar; // Kurangi sisa stok
        $product->save();
    }

    return redirect('/dashboard/transaksi/ather')->with(['success' => 'Data berhasil disimpan!']);
}    

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
{
    // Ambil semua data dari tabel athers dengan relasi product
    $query = Ather::with('product', 'type')->orderBy('created_at', 'desc');

    if ($request->has(['start_date', 'end_date'])) {
      $endDate = Carbon::parse($request->end_date)->endOfDay(); // Mengambil akhir hari
      $query->whereBetween('created_at', [$request->start_date, $endDate]);
    }

    $athers = $query->get();

    // Kembalikan data langsung tanpa pengelompokan
    return view('dashboard.report.sale.keluar', [
        'athers' => $athers, // Data langsung dari tabel athers
        'title' => 'Barang Keluar (Bukan Penjualan)',
    ]);
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
