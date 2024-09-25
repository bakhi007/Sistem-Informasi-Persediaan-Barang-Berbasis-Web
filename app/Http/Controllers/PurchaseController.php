<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchase::paginate(1);
        return view('dashboard.transaksi.purchase.index', compact('purchases'), ['title' => 'Transaksi Pembelian']);
        // return view('dashboard.transaksi.purchase.index', ['purchases' => Purchase::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.transaksi.purchase.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:6|max:255',
            'deskripsi' => ['required'],
            'harga' => 'required',
            'jumlah_barang' => 'required',
            'total_harga' => 'required',
            'tanggal' => 'required',
        ]);

        Purchase::create($validatedData);
        
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
