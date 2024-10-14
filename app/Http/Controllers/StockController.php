<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
    $products = Product::when($search, function($query) use ($search) {
            return $query->where('name', 'LIKE', "%{$search}%") // Ganti 'name' dengan kolom yang ingin dicari
                         ->orWhere('description', 'LIKE', "%{$search}%"); // Contoh kolom lain
        })
        ->when($request->input('sort'), function($query) use ($request) {
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
        ->paginate(10);

    return view('dashboard.stok.index', compact('products'), ['title' => 'Stok Persediaan Roti']);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
