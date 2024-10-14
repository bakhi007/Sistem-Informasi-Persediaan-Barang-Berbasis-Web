<?php

namespace App\Models;

use App\Models\Ather;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    public function athers(): HasMany
    {
        return $this->hasMany(Ather::class); //category_id sebagai foreign key di table posts
    }
}
