<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function index(){
        return view('forgot_password.index', [
            'title' => 'forgot_password'
        ]);
    }

    public function changePassword(Request $request)
{
    // Validasi input jika diperlukan
    $request->all();

    // Validasi dengan pesan kustom
    $request->validate([
        'new_password' => 'required|string|min:8',
    ], [
        'new_password.min' => 'Password baru terlalu pendek!'
    ]);

    // Mendapatkan semua nilai input
    $username = $request->input('username');
    $new_password = $request->input('new_password');

    // Mengecek apakah username ada di database
    $userExists = \App\Models\User::where('username', $username)->exists();

    if ($userExists) {
        $token = env('DEFAULT_PASSWORD');
        
        $default_password = $request->input('default_password');
        if ($default_password === $token) {
            $user = \App\Models\User::where('username', $username)->first();

            // Hash password baru
            $user->password = Hash::make($new_password);

            // Simpan perubahan
            $user->save();

            // Redirect dengan pesan sukses
            return back()->with('success', 'Password berhasil diubah!');
        } else {
            return back()->with('error', 'Kamu tidak diizinkan!');
        }
    } else {
        // Kirimkan alert jika user tidak ditemukan
        return back()->with('error', 'Username tidak ditemukan!');
    }
}




    public function logout(Request $request) {
        // Auth::logout();
    
        // $request->session()->invalidate();
    
        // $request->session()->regenerateToken();
    
        // return redirect('/login');
    }
}
