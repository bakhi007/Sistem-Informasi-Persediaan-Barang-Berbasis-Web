<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['kode_barang', 'name', 'masa_berlaku', 'harga_beli', 'harga_jual', 'sisa_stok', 'kepemilikan'];
    
    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class); //product_id sebagai foreign key di table purchases
    }
    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class); //product_id sebagai foreign key di table sales
    }
    public function athers(): HasMany
    {
        return $this->hasMany(Ather::class); //product_id sebagai foreign key di table athers
    }
    public function productions(): HasMany
    {
        return $this->hasMany(Production::class); //product_id sebagai foreign key di table purchases
    }
}
