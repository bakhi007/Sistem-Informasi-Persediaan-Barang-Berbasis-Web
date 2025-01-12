<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Production extends Model
{
  protected $fillable = [
    'product_id',
    'kode_produksi',
    'stok_masuk',
    'tanggal_produksi',
    'tanggal_kedaluwarsa',
  ];

  public function product(): BelongsTo
  {
      return $this->belongsTo(Product::class);
  }
}
