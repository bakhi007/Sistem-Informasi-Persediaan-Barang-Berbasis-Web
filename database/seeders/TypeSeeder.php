<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Type::create([
        'name' => 'Rusak / Berjamur',
        
    ]);
    Type::create([
        'name' => 'Aist System',
       
    ]);
    Type::create([
        'name' => 'Delivery',
      
    ]);
    Type::create([
        'name' => 'Pesanan Pondok',
      
    ]);
    Type::create([
        'name' => 'Pesanan Retail',
      
    ]);
    Type::create([
        'name' => 'Icip-Icip',
      
    ]);
    Type::create([
        'name' => 'Bonus Paket',
      
    ]);
    }
}