<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/dashboard', function (){
    return view('dashboard.index', ['title' => 'Dashboard']);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/transaksi/purchase', PurchaseController::class)->middleware('auth');
Route::resource('/dashboard/transaksi/sale', SaleController::class)->middleware('auth');
// Route::resource('/dashboard/transaksi/create', PurchaseController::class)->middleware('auth');


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

Route::get('/photos', [PhotoController::class, 'search'])->name('photos.search');
Route::get('/photo', [PhotoController::class, 'show']);