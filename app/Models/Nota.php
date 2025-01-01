<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
  protected $fillable = [
    'token',
    'total_jumlah_harga',
    'total_diskon',
    'total_bayar', // Pastikan 'author_id' termasuk di sini
    'uang_terima', // Pastikan 'author_id' termasuk di sini
    'kembalian', // Pastikan 'author_id' termasuk di sinii
];
}
