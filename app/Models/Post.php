<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    // jika nama table nya sama dengan nama model (misal model nya Post) maka table nya Posts
    // jika nama table nya tidak sama dengan nama model (misal model nya Post dan table nya blog_posts) maka sertakan code di bawah ini
    // protected $table = 'blog_posts';

    // jika primary key nya bukan id (misal = post_id) maka sertakan code di bawah ini
    // protected $primaryKey = 'post_id';
    use HasFactory, Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'body',
        'author_id', // Pastikan 'author_id' termasuk di sini
    ];

    protected $with = ['author', 'category'];
    
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false, fn ($query, $search ) => 
            $query->where('title', 'like', '%' . request('search') . '%')
        );

        $query->when(
            $filters['category'] ?? false, fn ($query, $category) =>
            $query->whereHas('category', fn ($query) => $query->where('slug', $category))
        );

        $query->when(
            $filters['author'] ?? false, fn ($query, $author) =>
            $query->whereHas('author', fn ($query) => $query->where('username', $author))
        );
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(){
    return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
