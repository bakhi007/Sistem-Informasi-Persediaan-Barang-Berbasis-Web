<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UnsplashService
{
    protected $accessKey;

    public function __construct()
    {
        $this->accessKey = config('unsplash.access_key');
    }

    public function searchPhotos($query, $perPage = 10)
    {
        $response = Http::get("https://api.unsplash.com/search/photos", [
            'query' => $query,
            'per_page' => $perPage,
            'client_id' => $this->accessKey,
        ]);

        return $response->json();
    }
}
