<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = auth()->id();
        $search = $request->input('search');
        $selectedCategoryIds = $request->input('categories', []); // Ambil array kategori yang dipilih
    
        // Ambil kategori untuk ditampilkan di tampilan
        $categories = Category::whereHas('posts', function ($query) use ($userId) {
            $query->where('author_id', $userId);
        })->withCount(['posts' => function ($query) use ($userId) {
            $query->where('author_id', $userId);
        }])->get();
    
        // Query untuk mengambil postingan berdasarkan pencarian dan kategori
        $postsQuery = Post::where('author_id', $userId);
    
        if ($search) {
            $postsQuery->where('title', 'like', '%' . $search . '%');
        }
    
        if (!empty($selectedCategoryIds)) {
            $postsQuery->whereIn('category_id', $selectedCategoryIds); // Filter berdasarkan kategori
        }
    
        $posts = $postsQuery->paginate(5)->withQueryString();
    
        return view('dashboard.posts.index', compact('categories', 'posts'), [
            'title' => 'Dashboard Posts'
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Create',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'slug' => ['required', 'unique:posts'],
        'category_id' => 'required',
        'body' => 'required',
    ]);

    // Pastikan pengguna sudah login
    if (auth()->check()) {
        $validatedData['author_id'] = auth()->user()->id;
    } else {
        return redirect('/login')->withErrors(['msg' => 'Anda harus login terlebih dahulu.']);
    }

    $selectedCategories = $request->input('categories', []);

    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

    Post::create($validatedData);

    return redirect('/dashboard/posts')->with(['success' => 'Post baru berhasil ditambahkan!']);
}


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => 'Show',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'title' => 'Edit',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
        ];

        if($request->slug != $post->slug) {
            $rules['slug'] = ['required', 'unique:posts'];
        }

        $validatedData = $request->validate($rules);

        // Pastikan pengguna sudah login
        if (auth()->check()) {
            $validatedData['author_id'] = auth()->user()->id;
        } else {
            return redirect('/login')->withErrors(['msg' => 'Anda harus login terlebih dahulu.']);
        }

        $selectedCategories = $request->input('categories', []);

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/dashboard/posts')->with(['success' => 'Post berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with(['success' => 'Post berhasil dihapus!']);
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug ]);
    }
}
