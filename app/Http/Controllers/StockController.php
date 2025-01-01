<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Spatie\SimpleExcel\SimpleExcelWriter;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil query pencarian dari input
        $search = $request->input('search');

        // Query untuk mendapatkan produk, dengan pencarian dan pengurutan
        $products = Product::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('name', 'LIKE', "%{$search}%");
            })
            ->when($request->input('sort'), function ($query) use ($request) {
                if ($request->input('sort') == 'harga_beli_asc') {
                    $query->orderBy('harga_beli', 'asc');
                } elseif ($request->input('sort') == 'harga_beli_desc') {
                    $query->orderBy('harga_beli', 'desc');
                } elseif ($request->input('sort') == 'harga_jual_asc') {
                    $query->orderBy('harga_jual', 'asc');
                } elseif ($request->input('sort') == 'harga_jual_desc') {
                    $query->orderBy('harga_jual', 'desc');
                } elseif ($request->input('sort') == 'sisa_stok_asc') {
                    $query->orderBy('sisa_stok', 'asc');
                } elseif ($request->input('sort') == 'sisa_stok_desc') {
                    $query->orderBy('sisa_stok', 'desc');
                }
            })
            ->paginate(5)
            ->appends($request->all());

            // Jika ada permintaan untuk mereset filter, redirect ke URL dasar
        if ($request->input('reset')) {
          return redirect('/dashboard/stok');
      }

        return view('dashboard.stok.index', compact('products'), ['title' => 'Stok Persediaan Barang']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('dashboard.stok.create', ['title' => 'Tambah Produk Baru', 'products' => Product::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'sisa_stok' => 'required|numeric|min:0',
            'kepemilikan' => 'required|string',
            'masa_berlaku' => 'required|numeric|min:0',
        ]);

        // Menyimpan data ke dalam tabel `products`
        Product::create([
            'name' => $validated['name'],
            'harga_beli' => $validated['harga_beli'],
            'harga_jual' => $validated['harga_jual'],
            'sisa_stok' => $validated['sisa_stok'],
            'kepemilikan' => $validated['kepemilikan'],
            'masa_berlaku' => $validated['masa_berlaku'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('stok.index')->with('success', 'Stok berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      return view('dashboard.stok.show', ['title' => 'Cetak Laporan Harian', 'products' => Product::all()]);
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id); // Ambil data produk berdasarkan id
        return view('dashboard.stok.edit', [
            'title' => 'Edit',
            'product' => $product, // Kirimkan variabel $product ke view
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      // Validasi data yang dikirimkan dari form
      $request->validate([
          'name' => 'required|string|max:255',
          'harga_beli' => 'required|numeric|min:0',
          'harga_jual' => 'required|numeric|min:0',
      ]);

      // Cari produk berdasarkan ID
      $product = Product::findOrFail($id);

      // Update data produk dengan nilai yang dikirimkan dari form
      $product->name = $request->input('name');
      $product->harga_beli = $request->input('harga_beli');
      $product->harga_jual = $request->input('harga_jual');
    

      // Simpan perubahan ke database
      $product->save();

      // Redirect atau memberi response setelah update berhasil
      return redirect()->route('stok.index')->with('success', 'Produk berhasil diubah');
    }

    public function exportPdf()
    {
        $products = Product::all();
        $title = 'Laporan Stok Harian'; // Judul PDF

        // Load view dan kirim data ke view
        $pdf = Pdf::loadView('pdf.export-product', ['products' => $products, 'title' => $title])
                   ->setPaper('a4', 'portrait') // Atur ukuran kertas jika perlu
                   ->setOptions(['defaultFont' => 'sans-serif']); // Set opsi font default

        // Download PDF
        return $pdf->download('laporan_stok_harian.pdf');
    }
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
