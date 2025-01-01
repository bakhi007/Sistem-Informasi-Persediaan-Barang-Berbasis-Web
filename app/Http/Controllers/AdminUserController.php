<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      if (auth()->guest() || auth()->user()->role !== 'Manajer') {
        abort(403);
    }

        // Ambil semua data pengguna tanpa pagination
        $allUsers = User::all();
    
        // Ambil data pengguna dengan pagination
        $users = User::paginate(10); // Ganti '10' dengan jumlah item per halaman yang diinginkan
    
        return view('dashboard.users.index', [
            'allUsers' => $allUsers, // Semua data
            'users' => $users,       // Data dengan pagination
            'title' => 'Pengelolaan Karyawan',
        ]);
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
   
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
