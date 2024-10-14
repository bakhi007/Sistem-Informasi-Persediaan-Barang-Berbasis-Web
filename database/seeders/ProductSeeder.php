<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Product::create([
        'name' => 'Bolu Lapis Marmer',
        'harga_beli' => '28500',
        'harga_jual' => '37000',
        'sisa_stok' => '4',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Brownies Kotak',
        'harga_beli' => '31000',
        'harga_jual' => '40000',
        'sisa_stok' => '3',
        'masa_berlaku' => '5',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Kasur 9 Rasa',
        'harga_beli' => '17000',
        'harga_jual' => '22000',
        'sisa_stok' => '0',
        'masa_berlaku' => '5',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bolu Cangkingan Ori',
        'harga_beli' => '17000',
        'harga_jual' => '22000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bolu Cangkingan Topping',
        'harga_beli' => '19000',
        'harga_jual' => '25000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Roll Abon',
        'harga_beli' => '13000',
        'harga_jual' => '17000',
        'sisa_stok' => '6',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Roll Keju',
        'harga_beli' => '13000',
        'harga_jual' => '17000',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Roll Meses',
        'harga_beli' => '13000',
        'harga_jual' => '17000',
        'sisa_stok' => '7',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Strucle',
        'harga_beli' => '11500',
        'harga_jual' => '15000',
        'sisa_stok' => '8',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bolu Bulat Pandan',
        'harga_beli' => '17000',
        'harga_jual' => '22000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bolu Bulat Coklat',
        'harga_beli' => '17000',
        'harga_jual' => '22000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Tawar Klasik',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '7',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Keping Coklat',
        'harga_beli' => '4000',
        'harga_jual' => '5000',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Donat Variant',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '44',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Coco Banana',
        'harga_beli' => '2500',
        'harga_jual' => '3500',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Coco Coklat',
        'harga_beli' => '2500',
        'harga_jual' => '3500',
        'sisa_stok' => '6',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Coco Kelapa',
        'harga_beli' => '2500',
        'harga_jual' => '3500',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bot Pisang Meses',
        'harga_beli' => '4000',
        'harga_jual' => '5000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bot Pisang Keju',
        'harga_beli' => '4000',
        'harga_jual' => '5000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bot Kepang Sosis',
        'harga_beli' => '6000',
        'harga_jual' => '7500',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bot Sosis',
        'harga_beli' => '6000',
        'harga_jual' => '7500',
        'sisa_stok' => '5',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Pizza Sosis',
        'harga_beli' => '6000',
        'harga_jual' => '7500',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Oval Abon',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Oval Keju',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Oval Meses',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Oval Kacang',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Pisang Untir',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Pisang Coklat Keju',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '1',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Pisang Coklat',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '5',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Pisang Keju',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '1',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Roti Keju',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bolen',
        'harga_beli' => '3500',
        'harga_jual' => '4500',
        'sisa_stok' => '1',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Mexico Crumble',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Brownies Potong',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '11',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bolu Pelangi',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bolu Potong Zebra',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Bolu Pot Pandan',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Roti Coklat',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Roti Pandan',
        'harga_beli' => '3000',
        'harga_jual' => '4000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Donat Cream',
        'harga_beli' => '2500',
        'harga_jual' => '3000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Roti Banana Coklat',
        'harga_beli' => '2500',
        'harga_jual' => '3000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Sisir Variant',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Sobek Variant',
        'harga_beli' => '7500',
        'harga_jual' => '10000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Kue Tart Keping',
        'harga_beli' => '61500',
        'harga_jual' => '80000',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Kue Tart Siram',
        'harga_beli' => '54000',
        'harga_jual' => '70000',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'lilin magic',
        'harga_beli' => '2500',
        'harga_jual' => '3000',
        'sisa_stok' => '18',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'lilin panjang',
        'harga_beli' => '1500',
        'harga_jual' => '2000',
        'sisa_stok' => '40',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'lilin angka',
        'harga_beli' => '1500',
        'harga_jual' => '2000',
        'sisa_stok' => '18',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'paket murmer',
        'harga_beli' => '11000',
        'harga_jual' => '14500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'paket ahsan 1',
        'harga_beli' => '12000',
        'harga_jual' => '15500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'paket ahsan 2',
        'harga_beli' => '14000',
        'harga_jual' => '18000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'paket ahsan 3',
        'harga_beli' => '15500',
        'harga_jual' => '20000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'paket snack dcp',
        'harga_beli' => '5500',
        'harga_jual' => '7000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'paket snack jajan basah',
        'harga_beli' => '6000',
        'harga_jual' => '7500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'bolu chiffon ori',
        'harga_beli' => '25500',
        'harga_jual' => '33000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'bolu chiffon Keju',
        'harga_beli' => '27500',
        'harga_jual' => '36000',
        'sisa_stok' => '9',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'roti bluder',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '40',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'bluder pack',
        'harga_beli' => '54000',
        'harga_jual' => '70000',
        'sisa_stok' => '80',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Risol Roughut',
        'harga_beli' => '2000',
        'harga_jual' => '2500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'name' => 'Air Mineral',
        'harga_beli' => '2500',
        'harga_jual' => '3500',
        'sisa_stok' => '4',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => "D'Sruput",
        'harga_beli' => '8000',
        'harga_jual' => '11000',
        'sisa_stok' => '25',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Slondok Matahari',
        'harga_beli' => '22000',
        'harga_jual' => '30000',
        'sisa_stok' => '9',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Almas Peyek',
        'harga_beli' => '13000',
        'harga_jual' => '17500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Almas Bayam',
        'harga_beli' => '13000',
        'harga_jual' => '17500',
        'sisa_stok' => '1',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Almas Kembang Goyang',
        'harga_beli' => '11000',
        'harga_jual' => '15000',
        'sisa_stok' => '7',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Almas Keripik Tempe',
        'harga_beli' => '13000',
        'harga_jual' => '17500',
        'sisa_stok' => '1',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Sale Pisang Rizki',
        'harga_beli' => '15000',
        'harga_jual' => '20000',
        'sisa_stok' => '13',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Klanting Rizki',
        'harga_beli' => '12000',
        'harga_jual' => '16000',
        'sisa_stok' => '11',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Kecimpring',
        'harga_beli' => '10000',
        'harga_jual' => '13500',
        'sisa_stok' => '10',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Qtela Tempe',
        'harga_beli' => '13000',
        'harga_jual' => '17500',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Dele Renyah',
        'harga_beli' => '10000',
        'harga_jual' => '13500',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Rambak Ikan Nila',
        'harga_beli' => '11000',
        'harga_jual' => '15000',
        'sisa_stok' => '6',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Basreng Tozi',
        'harga_beli' => '9000',
        'harga_jual' => '12000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Basreng Riski',
        'harga_beli' => '9500',
        'harga_jual' => '12500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Basreng Paijo',
        'harga_beli' => '15000',
        'harga_jual' => '20000',
        'sisa_stok' => '4',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Rengginang Manis',
        'harga_beli' => '14500',
        'harga_jual' => '19000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Rengginang Gurih',
        'harga_beli' => '12500',
        'harga_jual' => '16000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Rengginang Singkong',
        'harga_beli' => '13000',
        'harga_jual' => '17500',
        'sisa_stok' => '11',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Dakariz',
        'harga_beli' => '10000',
        'harga_jual' => '13500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'King Potato',
        'harga_beli' => '15500',
        'harga_jual' => '20000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Keripik Talas',
        'harga_beli' => '9000',
        'harga_jual' => '12000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Telor Gabus',
        'harga_beli' => '5500',
        'harga_jual' => '7000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Yava',
        'harga_beli' => '7500',
        'harga_jual' => '10000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Cenat Cenut',
        'harga_beli' => '8000',
        'harga_jual' => '11000',
        'sisa_stok' => '33',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Mushroom',
        'harga_beli' => '11500',
        'harga_jual' => '15000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Banafam',
        'harga_beli' => '16000',
        'harga_jual' => '21000',
        'sisa_stok' => '6',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Shanana',
        'harga_beli' => '15000',
        'harga_jual' => '20000',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Cheese Qu',
        'harga_beli' => '17000',
        'harga_jual' => '23000',
        'sisa_stok' => '23',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Nopia',
        'harga_beli' => '15500',
        'harga_jual' => '20000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Arumanis Bulat',
        'harga_beli' => '13000',
        'harga_jual' => '17500',
        'sisa_stok' => '13',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Abon Sapi Pouch Merah',
        'harga_beli' => '18000',
        'harga_jual' => '24000',
        'sisa_stok' => '6',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Abon Sapi Pouch Kuning',
        'harga_beli' => '30000',
        'harga_jual' => '40500',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Abon Sapi Toples Kuning',
        'harga_beli' => '58000',
        'harga_jual' => '78000',
        'sisa_stok' => '8',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Abon Sapi Toples Merah',
        'harga_beli' => '42000',
        'harga_jual' => '58000',
        'sisa_stok' => '9',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Wedangqu',
        'harga_beli' => '11000',
        'harga_jual' => '15000',
        'sisa_stok' => '11',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Jaren',
        'harga_beli' => '18000',
        'harga_jual' => '24500',
        'sisa_stok' => '7',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Gula Semut Aren',
        'harga_beli' => '16000',
        'harga_jual' => '21500',
        'sisa_stok' => '5',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Batang Coffe Robusta',
        'harga_beli' => '15500',
        'harga_jual' => '20000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Batang Coffe Arabica',
        'harga_beli' => '23000',
        'harga_jual' => '30000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'E Kopi Robusta',
        'harga_beli' => '18000',
        'harga_jual' => '24000',
        'sisa_stok' => '9',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'E Kopi Arabica',
        'harga_beli' => '20000',
        'harga_jual' => '27000',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'E Kopi Ekselsa',
        'harga_beli' => '18000',
        'harga_jual' => '24000',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'E Kopi Robusta Kecil',
        'harga_beli' => '14000',
        'harga_jual' => '19000',
        'sisa_stok' => '9',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Afieka Tea',
        'harga_beli' => '2000',
        'harga_jual' => '2500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'The Hijau Sangan Simbah Ori',
        'harga_beli' => '2000',
        'harga_jual' => '2500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Jahe Niebos',
        'harga_beli' => '13000',
        'harga_jual' => '17000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Manisan Gandul',
        'harga_beli' => '24500',
        'harga_jual' => '32000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Kue Kacang',
        'harga_beli' => '36000',
        'harga_jual' => '47000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Brownies Kering',
        'harga_beli' => '18500',
        'harga_jual' => '24000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Bolu Kering Ahsan',
        'harga_beli' => '23000',
        'harga_jual' => '30000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Bagelan Ahsan',
        'harga_beli' => '15000',
        'harga_jual' => '20000',
        'sisa_stok' => '1',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Seblak Bunga',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '2',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Seblak Warna',
        'harga_beli' => '5500',
        'harga_jual' => '7500',
        'sisa_stok' => '8',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Pangsit Cubit',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '3',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Pilus Bunga',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '1',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Pang Pang Pedas',
        'harga_beli' => '7000',
        'harga_jual' => '9500',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Pang Pang Manis',
        'harga_beli' => '7000',
        'harga_jual' => '9500',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Slondok Keriting',
        'harga_beli' => '7000',
        'harga_jual' => '9000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Tela Tela Kotak',
        'harga_beli' => '5500',
        'harga_jual' => '7000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Pisang Aroma Pendek',
        'harga_beli' => '7000',
        'harga_jual' => '9000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Makaroni Nasgor Keju',
        'harga_beli' => '6000',
        'harga_jual' => '7500',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Makaroni Balado',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Twist Corn',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Untir Untir',
        'harga_beli' => '11500',
        'harga_jual' => '15000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Kacang Atom',
        'harga_beli' => '7000',
        'harga_jual' => '9000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Emping Manis',
        'harga_beli' => '13000',
        'harga_jual' => '17000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Klanting Merah Putih',
        'harga_beli' => '6000',
        'harga_jual' => '7500',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Cincin Udang Balado',
        'harga_beli' => '7000',
        'harga_jual' => '9000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Cincin Udang Ori',
        'harga_beli' => '7500',
        'harga_jual' => '10000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Potato',
        'harga_beli' => '5500',
        'harga_jual' => '7000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Stik Talas',
        'harga_beli' => '7500',
        'harga_jual' => '10000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Kacang Koro',
        'harga_beli' => '7500',
        'harga_jual' => '9500',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Kacang Polong',
        'harga_beli' => '7500',
        'harga_jual' => '9500',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Tortila',
        'harga_beli' => '9000',
        'harga_jual' => '12000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Samosa',
        'harga_beli' => '12500',
        'harga_jual' => '16000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Stik Bawang Keju',
        'harga_beli' => '13000',
        'harga_jual' => '17000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Stik Bawang Balado',
        'harga_beli' => '13000',
        'harga_jual' => '17000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Krupuk Tengiri',
        'harga_beli' => '9000',
        'harga_jual' => '12000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Krupuk Tahu',
        'harga_beli' => '9000',
        'harga_jual' => '12000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Krupuk Tahu Parijot',
        'harga_beli' => '8500',
        'harga_jual' => '11000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Keripik Pisang Manis',
        'harga_beli' => '10500',
        'harga_jual' => '13500',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Mugewa Kering',
        'harga_beli' => '21000',
        'harga_jual' => '27000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Bagelan Rq',
        'harga_beli' => '21000',
        'harga_jual' => '27000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
      Product::create([
        'name' => 'Hampers Cookies',
        'harga_beli' => '24000',
        'harga_jual' => '34000',
        'sisa_stok' => '14',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Titipan UMKM',
        
    ]);
    
    }
}
