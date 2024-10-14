<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PurchaseController extends Controller
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
       $purchasesQuery = Purchase::with('product');

      // Jika ada parameter pencarian, tambahkan kondisi where untuk mencari berdasarkan nama produk
      if ($search) {
        $purchasesQuery->whereHas('product', function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%");
        });
    }

    // Menentukan urutan berdasarkan filter
    if ($sort === 'stok_masuk_desc') {
      $purchasesQuery->orderBy('stok_masuk', 'desc');
  } elseif ($sort === 'stok_masuk_asc') {
      $purchasesQuery->orderBy('stok_masuk', 'asc');
  } elseif ($sort === 'jumlah_harga_beli_desc') {
      $purchasesQuery->orderBy('jumlah_harga_beli', 'desc');
  } elseif ($sort === 'jumlah_harga_beli_asc') {
      $purchasesQuery->orderBy('jumlah_harga_beli', 'asc');
  } elseif ($sort === 'created_at_desc') {
      $purchasesQuery->orderBy('created_at', 'desc');
  } elseif ($sort === 'created_at_asc') {
      $purchasesQuery->orderBy('created_at', 'asc');
  }  elseif ($sort === 'tanggal_kedaluwarsa_desc') {
    $purchasesQuery->orderBy('tanggal_kedaluwarsa', 'desc');
} elseif ($sort === 'tanggal_kedaluwarsa_asc') {
    $purchasesQuery->orderBy('tanggal_kedaluwarsa', 'asc');
}
  else {
      $purchasesQuery->orderBy('created_at', 'desc');
  }

      // Ambil data penjualan dengan pagination
      $purchases = $purchasesQuery->paginate(10)->appends(['sort' => $sort, 'search' => $search]);

        return view('dashboard.transaksi.purchase.index', compact('purchases'), ['title' => 'Transaksi Pembelian']);
        // return view('dashboard.transaksi.purchase.index', ['purchases' => Purchase::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.transaksi.purchase.create', ['title' => 'Input Pembelian', 'products' => Product::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'harga_beli' => 'required|numeric',
            'stok_masuk' => 'required|numeric',
            'jumlah_harga_beli' => 'required|numeric',
            'tanggal_produksi' => 'required|date',
            'tanggal_kedaluwarsa' => 'required|date',
        ]);

        // Buat catatan pembelian
        $purchase = Purchase::create($validatedData);

        // Perbarui stok produk
        $product = Product::find($validatedData['product_id']);
        $product->sisa_stok += $purchase->stok_masuk; // Tambahkan stok
        $product->save();
        
        return redirect('/dashboard/transaksi/purchase')->with(['success' => 'Post baru berhasil ditambahkan!']);
        // return $request;
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
