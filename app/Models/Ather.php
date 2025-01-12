<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ather extends Model
{
    use HasFactory; // Pastikan untuk menggunakan trait ini jika diperlukan

    protected $fillable = [
        'product_id',
        'kode_produksi',
        'type_id',
        'harga_jual',
        'stok_keluar',
        'tanggal_keluar',
    ];
    
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
