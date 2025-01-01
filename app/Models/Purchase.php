<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class Purchase extends Model
{
    // jika nama table nya sama dengan nama model (misal model nya Purchase) maka table nya Purchases
    // jika nama table nya tidak sama dengan nama model (misal model nya Purchase dan table nya blog_Purchases) maka sertakan code di bawah ini
    // protected $table = 'blog_Purchases';

    // jika primary key nya bukan id (misal = Purchase_id) maka sertakan code di bawah ini
    // protected $primaryKey = 'Purchase_id';
    // use HasFactory, Sluggable;
    protected $fillable = [
        'product_id',
        'stok_masuk',
        'harga_beli',
        'jumlah_harga_beli',
        'tanggal_produksi',
        'tanggal_kedaluwarsa',
    ];

    // protected $with = ['author', 'category'];
    
    // public function scopeFilter(Builder $query, array $filters): void
    // {
    //     $query->when(
    //         $filters['search'] ?? false, fn ($query, $search ) => 
    //         $query->where('title', 'like', '%' . request('search') . '%')
    //     );

    //     $query->when(
    //         $filters['category'] ?? false, fn ($query, $category) =>
    //         $query->whereHas('category', fn ($query) => $query->where('slug', $category))
    //     );

    //     $query->when(
    //         $filters['author'] ?? false, fn ($query, $author) =>
    //         $query->whereHas('author', fn ($query) => $query->where('username', $author))
    //     );
    // }

    // public function author(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
