<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AtherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// landing page
// Route::get('/', function () {
//     return view('home', ['title' => 'Home']);
// });
Route::get('/', function () {
    return view('landing');
});

// langsung login
// Route::get('/', [LoginController::class, 'index']
//     // return view('home', ['title' => 'Home']);
// )->name('login')->middleware('guest');

// Route::get('/home', function () {
//     return view('home', ['title' => 'Home']);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/forgot_password', [PasswordController::class, 'index'])->name('forgot_password')->middleware('guest');
Route::post('/forgot_password', [PasswordController::class, 'changePassword'])->middleware('guest');

// back up db
Route::get('/backup-database', function () {
  Artisan::call('backup:run --only-db');
  return response()->json([
      'status' => 'success',
      'message' => 'Backup database berhasil dibuat!',
  ]);
})->name('backup.database')->middleware('auth');


// Route::get('/dashboard', function (){
//     return view('dashboard.index', ['title' => 'Dashboard']);
// })->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/transaksi/purchase', PurchaseController::class)->middleware('auth');

Route::resource('/dashboard/transaksi/sale', SaleController::class)->middleware('auth');

Route::post('/sale', [SaleController::class, 'store'])->middleware('auth');
Route::post('/nota', [SaleController::class, 'store'])->middleware('auth');

// Route::delete('/dashboard/transaksi/sale/{id}', [SaleController::class, 'destroy'])->name('sale.delete')->middleware('auth');
Route::delete('/sale/delete/{id}', [SaleController::class, 'destroy'])->name('sale.delete');
Route::get('/dashboard/transaksi/sale/update-total', [SaleController::class, 'updateTotal']);
Route::get('/dashboard/report/sale/produk', [SaleController::class, 'show'])->name('sale.show');
Route::get('/dashboard/transaksi/sale', [SaleController::class, 'index'])->name('sale.index');
Route::get('/export-sold', [SaleController::class, 'exportPdf'])->middleware('auth');
Route::get('/api/check-sales', [SaleController::class, 'checkSales']);



// Route::delete('/dashboard/transaksi/sale/{id}', [SaleController::class, 'destroy'])->name('sales.destroy')->middleware('auth');


Route::get('/api/products/{id}', [SaleController::class, 'getProduct']);

Route::resource('/dashboard/transaksi/ather', AtherController::class)->middleware('auth');
Route::get('/dashboard/report/sale/keluar', [AtherController::class, 'show'])->name('ather.show');

Route::resource('/dashboard/report/sale', NotaController::class)->middleware('auth');
Route::get('/dashboard/report/sale/token/{token}', [NotaController::class, 'showByToken'])->middleware('auth');
Route::get('/dashboard/report/sale/nota', [NotaController::class, 'show'])->name('nota.show');
Route::get('/export-nota', [NotaController::class, 'exportPdf'])->middleware('auth');


Route::resource('/dashboard/stok', StockController::class)->middleware('auth');
Route::get('/export-pdf', [StockController::class, 'exportPdf'])->middleware('auth');


Route::resource('/dashboard/', DashboardController::class)->middleware('auth');
Route::post('/dashboard/transaksi/purchase',[PurchaseController::class, 'store'])->name('purchase.store');


Route::get('/about', function () {
    return view('about', ['nama' => 'Gwej', 'title' => 'About']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(7)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    return view('post', ['title' => 'Artikel', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' artikel oleh ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => count($category->posts) . ' artikel dalam kategori ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/dashboard/tentang', [AboutController::class, 'index'])->name('dashboard.tentang');

// Auth Admin
Route::resource('/dashboard/users', AdminUserController::class)->middleware('auth');