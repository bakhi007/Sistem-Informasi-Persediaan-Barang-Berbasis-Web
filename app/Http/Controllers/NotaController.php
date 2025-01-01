<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Nota;
use App\Models\Sale;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    Carbon::setLocale('id'); // Mengatur locale ke Bahasa Indonesia
    $token = $request->input('id'); // Mengambil token dari query string
    $nota = Nota::where('token', $token)->firstOrFail(); // Mengambil data nota berdasarkan token

    $title = "Detail Nota"; // Judul untuk view

    // Mengambil semua data penjualan berdasarkan token
    $sales = Sale::with('product')->where('token', $token)->get(); // Ganti firstOrFail() dengan get()
    
    return view('dashboard.report.sale.index', compact('nota', 'sales', 'title')); // Kirim variabel nota, sales, dan title ke view
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
    // Ambil token dari URL
    $token = $request->query('id');

    // Validasi data
    $request->validate([
        'jumlah_harga_jual' => 'required|numeric',
        'diskon' => 'required|numeric',
        'total_harga_jual' => 'required|numeric',
        'uang_terima' => 'required|numeric',
        'kembalian' => 'required|numeric',
    ]);

    // Simpan data ke database
    Nota::create([
        'token' => $token,
        'total_jumlah_harga' => $request->jumlah_harga_jual,
        'total_diskon' => $request->diskon,
        'total_bayar' => $request->total_harga_jual,
        'uang_terima' => $request->uang_terima,
        'kembalian' => $request->kembalian,
    ]);

    return redirect()->back()->with('success', 'Data berhasil disimpan');
}

    /**
     * Display the specified resource.
     */
    // public function show(Request $request)
    // {
    //     $nota = Nota::findOrFail($request->input('id')); // Mengambil data nota berdasarkan ID
    //     return view('dashboard.report.sale.index', compact('nota')); // Pastikan yang dikirim adalah 'nota'
    // }
    public function show(Request $request)
{
    $query = Nota::query();

    if ($request->has(['start_date', 'end_date'])) {
        $endDate = Carbon::parse($request->end_date)->endOfDay(); // Mengambil akhir hari
        $query->whereBetween('created_at', [$request->start_date, $endDate]);
    }

    $notas = $query->orderBy('created_at', 'desc')->get();

    // Hitung total pendapatan berdasarkan hasil filter
    $totalPendapatanBerdasarkanFilter = $notas->sum('total_bayar');

    return view('dashboard.report.sale.nota', [
        'notas' => $notas,
        'totalPendapatanBulanIni' => $totalPendapatanBerdasarkanFilter, // Menggunakan total pendapatan yang sudah difilter
        'title' => 'Nota Penjualan'
    ]);
}

public function exportPdf(Request $request)
{
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    // Dapatkan data nota berdasarkan rentang tanggal
    $notas = Nota::whereBetween('created_at', [$startDate, $endDate])->get();
    $title = 'Laporan Nota Penjualan';

    // Hitung total pendapatan
    $totalPendapatan = $notas->sum('total_bayar');

    // Load view dan kirim data ke view
    $pdf = Pdf::loadView('pdf.export-nota', [
            'notas' => $notas,
            'title' => $title,
            'totalPendapatan' => $totalPendapatan
        ])
        ->setPaper('a4', 'portrait')
        ->setOptions(['defaultFont' => 'sans-serif']);

    // Download PDF
    return $pdf->download('laporan_nota_penjualan.pdf');
}







    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nota $nota)
    {
        // // Ambil semua data dari tabel notas (atau sesuai kebutuhan)
        // $notas = Nota::all(); // Atau gunakan query lain jika perlu

        // // Kembalikan view untuk halaman nota penjualan dengan data
        // return view('dashboard.report.sale.product', compact('notas'), ['title' => 'Nota']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
