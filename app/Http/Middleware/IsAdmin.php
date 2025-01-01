<?php

namespace App\Http\Middleware; // Harus sesuai dengan lokasi file

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user terautentikasi dan memiliki peran admin
        if (auth()->guest() || auth()->user()->username !== 'Siti Isnaeni') {
            abort(403);
        }
        return $next($request);
    }
}
