<?php

namespace App\Http\Controllers;

use App\Services\UnsplashService;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    protected $unsplash;

    public function __construct(UnsplashService $unsplash)
    {
        $this->unsplash = $unsplash;
    }

    public function search(Request $request)
    {
        $query = $request->input('query', 'nature');
        $photos = $this->unsplash->searchPhotos($query);

        return view('photos.index', ['photos' => $photos['results']]);
    }

    public function show(Request $request)
    {
        $query = $request->input('query', 'nature');
        $photos = $this->unsplash->searchPhotos($query);

        // Ambil gambar pertama
        $firstPhoto = $photos['results'][0] ?? null;

        return view('photos.show', ['photo' => $firstPhoto]);
    }
}
