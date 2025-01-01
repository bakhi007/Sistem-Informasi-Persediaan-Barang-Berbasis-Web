<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Ather;
use App\Models\Product;
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
    public function create()
    {
      return view('dashboard.transaksi.ather.create', ['title' => 'Input Transaki Lain', 'products' => Product::all(), 'types' => Type::all()]);
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
      'harga_jual' => 'required|numeric|',
      'stok_keluar' => 'required|numeric|min:1',
      'tanggal_keluar' => 'required|date',
  ]);

  // Ambil produk berdasarkan product_id
  $product = Product::find($validatedData['product_id']);

  // Validasi stok_keluar tidak melebihi sisa_stok
  if ($validatedData['stok_keluar'] > $product->sisa_stok) {
      return redirect()->back()->withErrors([
          'stok_keluar' => 'Stok keluar tidak boleh lebih dari ' . $product->sisa_stok,
      ])->withInput();
  }

  // Buat catatan transaksi lain
  $ather = Ather::create($validatedData);

  // Perbarui stok produk
  $product->sisa_stok -= $ather->stok_keluar; // Kurangi stok
  $product->save();

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
