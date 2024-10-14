<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Ather;
use App\Models\Product;
use Illuminate\Http\Request;

class AtherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data dari tabel athers dengan pagination
        $athers = Ather::with(['product', 'type'])->paginate(10); // Ganti 10 dengan jumlah item per halaman yang diinginkan
    
        // Mengembalikan view dengan data athers dan title
        return view('dashboard.transaksi.ather.index', compact('athers'))->with('title', 'Transaksi Lain');
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

  return redirect('/dashboard/transaksi/ather')->with(['success' => 'Post baru berhasil ditambahkan!']);
    }

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
