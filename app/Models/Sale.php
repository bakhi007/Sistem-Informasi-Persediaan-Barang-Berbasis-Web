<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class Sale extends Model
{
    // jika nama table nya sama dengan nama model (misal model nya Sale) maka table nya Sales
    // jika nama table nya tidak sama dengan nama model (misal model nya Sale dan table nya blog_Sales) maka sertakan code di bawah ini
    // protected $table = 'blog_Sales';

    // jika primary key nya bukan id (misal = Sale_id) maka sertakan code di bawah ini
    // protected $primaryKey = 'Sale_id';
    // use HasFactory, Sluggable;
    protected $fillable = [
      'product_id',
      'stok_keluar',
      'harga_jual',
      'jumlah_harga_jual', // Pastikan 'author_id' termasuk di sini
      'diskon', // Pastikan 'author_id' termasuk di sini
      'total_harga_jual', // Pastikan 'author_id' termasuk di sini
      'uang_terima', // Pastikan 'author_id' termasuk di sini
      'kembalian', // Pastikan 'author_id' termasuk di sini
      'tanggal_penjualan', // Pastikan 'author_id' termasuk di sini
  ];

  public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

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

    // public function category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // public function getRouteKeyName(){
    // return 'slug';
    // }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
}
