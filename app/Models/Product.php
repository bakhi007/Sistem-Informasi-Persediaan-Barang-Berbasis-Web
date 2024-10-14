<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'masa_berlaku', 'harga_beli', 'harga_jual', 'sisa_stok', 'kepemilikan'];
    
    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class); //category_id sebagai foreign key di table posts
    }
    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class); //category_id sebagai foreign key di table posts
    }
    public function athers(): HasMany
    {
        return $this->hasMany(Ather::class); //category_id sebagai foreign key di table posts
    }
}
