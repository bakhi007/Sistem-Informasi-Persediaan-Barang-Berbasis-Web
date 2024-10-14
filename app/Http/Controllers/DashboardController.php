<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        // Ambil tanggal hari ini
        $today = Carbon::today();
    
        // Ambil data penjualan hari ini dan kelompokkan berdasarkan product_id
        $topSale = Sale::select('product_id', DB::raw('SUM(stok_keluar) as total_stok'))
            ->whereDate('tanggal_penjualan', $today)
            ->groupBy('product_id')
            ->orderBy('total_stok', 'desc')
            ->with('product') // untuk mendapatkan relasi product
            ->first(); // ambil yang teratas
    
        // Ambil semua data penjualan hari ini
        $sales = Sale::with('product')->whereDate('tanggal_penjualan', $today)->get(); 
    
        // Ambil produk terkait dengan topSale
        $product = $topSale ? $topSale->product : null;
    
        // Cek apakah ada produk dengan stok rendah
        $isStokRendah = Product::where('sisa_stok', '<=', 3)->exists();
    
        return view('dashboard.index', compact('sales', 'topSale', 'product', 'isStokRendah'), ['title' => 'Dashboard']);
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
