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
        'kode_barang' => 'A001',
        'name' => 'Bolu Lapis Marmer',
        'harga_beli' => '28500',
        'harga_jual' => '37000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A002',
        'name' => 'Brownies Kotak',
        'harga_beli' => '31000',
        'harga_jual' => '40000',
        'sisa_stok' => '0',
        'masa_berlaku' => '5',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A003',
        'name' => 'Kasur 9 Rasa',
        'harga_beli' => '17000',
        'harga_jual' => '22000',
        'sisa_stok' => '0',
        'masa_berlaku' => '5',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A004',
        'name' => 'Bolu Cangkingan Ori',
        'harga_beli' => '17000',
        'harga_jual' => '22000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A005',
        'name' => 'Bolu Cangkingan Topping',
        'harga_beli' => '19000',
        'harga_jual' => '25000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A006',
        'name' => 'Roll Abon',
        'harga_beli' => '13000',
        'harga_jual' => '17000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
    Product::create([
      'kode_barang' => 'A007',
      'name' => 'Roll Keju',
      'harga_beli' => '13000',
      'harga_jual' => '17000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Ahsan Roti',
  ]);
  
  Product::create([
      'kode_barang' => 'A008',
      'name' => 'Roll Meses',
      'harga_beli' => '13000',
      'harga_jual' => '17000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Ahsan Roti',
  ]);
  
  Product::create([
      'kode_barang' => 'A009',
      'name' => 'Strucle',
      'harga_beli' => '11500',
      'harga_jual' => '15000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Ahsan Roti',
  ]);
  
  Product::create([
      'kode_barang' => 'A010',
      'name' => 'Bolu Bulat Pandan',
      'harga_beli' => '17000',
      'harga_jual' => '22000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Ahsan Roti',
  ]);  
  Product::create([
    'kode_barang' => 'A011',
    'name' => 'Bolu Bulat Coklat',
    'harga_beli' => '17000',
    'harga_jual' => '22000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A012',
    'name' => 'Tawar Klasik',
    'harga_beli' => '6000',
    'harga_jual' => '8000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A013',
    'name' => 'Keping Coklat',
    'harga_beli' => '4000',
    'harga_jual' => '5000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A014',
    'name' => 'Donat Variant',
    'harga_beli' => '3000',
    'harga_jual' => '4000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A015',
    'name' => 'Coco Banana',
    'harga_beli' => '2500',
    'harga_jual' => '3500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A016',
    'name' => 'Coco Coklat',
    'harga_beli' => '2500',
    'harga_jual' => '3500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A017',
    'name' => 'Coco Kelapa',
    'harga_beli' => '2500',
    'harga_jual' => '3500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A018',
    'name' => 'Bot Pisang Meses',
    'harga_beli' => '4000',
    'harga_jual' => '5000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A019',
    'name' => 'Bot Pisang Keju',
    'harga_beli' => '4000',
    'harga_jual' => '5000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A020',
    'name' => 'Bot Kepang Sosis',
    'harga_beli' => '6000',
    'harga_jual' => '7500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A021',
    'name' => 'Bot Sosis',
    'harga_beli' => '6000',
    'harga_jual' => '7500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
    'kode_barang' => 'A022',
    'name' => 'Pizza Sosis',
    'harga_beli' => '6000',
    'harga_jual' => '7500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Ahsan Roti',
]);
Product::create([
  'kode_barang' => 'A023',
  'name' => 'Oval Abon',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A024',
  'name' => 'Oval Keju',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A025',
  'name' => 'Oval Meses',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A026',
  'name' => 'Oval Kacang',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A027',
  'name' => 'Pisang Untir',
  'harga_beli' => '3000',
  'harga_jual' => '4000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A028',
  'name' => 'Pisang Coklat Keju',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A029',
  'name' => 'Pisang Coklat',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A030',
  'name' => 'Pisang Keju',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A031',
  'name' => 'Roti Keju',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A032',
  'name' => 'Bolen',
  'harga_beli' => '3500',
  'harga_jual' => '4500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A033',
  'name' => 'Mexico Crumble',
  'harga_beli' => '3000',
  'harga_jual' => '4000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A034',
  'name' => 'Brownies Potong',
  'harga_beli' => '3000',
  'harga_jual' => '4000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A035',
  'name' => 'Bolu Pelangi',
  'harga_beli' => '3000',
  'harga_jual' => '4000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A036',
  'name' => 'Bolu Potong Zebra',
  'harga_beli' => '3000',
  'harga_jual' => '4000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A037',
  'name' => 'Bolu Pot Pandan',
  'harga_beli' => '3000',
  'harga_jual' => '4000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A038',
  'name' => 'Roti Coklat',
  'harga_beli' => '3000',
  'harga_jual' => '4000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A039',
  'name' => 'Roti Pandan',
  'harga_beli' => '3000',
  'harga_jual' => '4000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A040',
  'name' => 'Donat Cream',
  'harga_beli' => '2500',
  'harga_jual' => '3000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A041',
  'name' => 'Roti Banana Coklat',
  'harga_beli' => '2500',
  'harga_jual' => '3000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A042',
  'name' => 'Sisir Variant',
  'harga_beli' => '6000',
  'harga_jual' => '8000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A043',
  'name' => 'Sobek Variant',
  'harga_beli' => '7500',
  'harga_jual' => '10000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A044',
  'name' => 'Kue Tart Keping',
  'harga_beli' => '61500',
  'harga_jual' => '80000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A045',
  'name' => 'Kue Tart Siram',
  'harga_beli' => '54000',
  'harga_jual' => '70000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A046',
  'name' => 'Lilin Magic',
  'harga_beli' => '2500',
  'harga_jual' => '3000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A047',
  'name' => 'Lilin Panjang',
  'harga_beli' => '1500',
  'harga_jual' => '2000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A048',
  'name' => 'Lilin Angka',
  'harga_beli' => '1500',
  'harga_jual' => '2000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A049',
  'name' => 'Paket Murmer',
  'harga_beli' => '11000',
  'harga_jual' => '14500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A050',
  'name' => 'Paket Ahsan 1',
  'harga_beli' => '12000',
  'harga_jual' => '15500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A051',
  'name' => 'Paket Ahsan 2',
  'harga_beli' => '14000',
  'harga_jual' => '18000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A052',
  'name' => 'Paket Ahsan 3',
  'harga_beli' => '15500',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A053',
  'name' => 'Paket Snack DCP',
  'harga_beli' => '5500',
  'harga_jual' => '7000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

Product::create([
  'kode_barang' => 'A054',
  'name' => 'Paket Snack Jajan Basah',
  'harga_beli' => '6000',
  'harga_jual' => '7500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Ahsan Roti',
]);

      Product::create([
        'kode_barang' => 'A055',
        'name' => 'bolu chiffon ori',
        'harga_beli' => '25500',
        'harga_jual' => '33000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A056',
        'name' => 'bolu chiffon Keju',
        'harga_beli' => '27500',
        'harga_jual' => '36000',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A057',
        'name' => 'roti bluder',
        'harga_beli' => '6000',
        'harga_jual' => '8000',
        'sisa_stok' => '00',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A058',
        'name' => 'bluder pack',
        'harga_beli' => '54000',
        'harga_jual' => '70000',
        'sisa_stok' => '00',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
      Product::create([
        'kode_barang' => 'A059',
        'name' => 'Risol Roughut',
        'harga_beli' => '2000',
        'harga_jual' => '2500',
        'sisa_stok' => '0',
        'masa_berlaku' => '4',
        'kepemilikan' => 'Ahsan Roti',
        
    ]);
    Product::create([
      'kode_barang' => 'B001',
      'name' => 'Air Mineral',
      'harga_beli' => '2500',
      'harga_jual' => '3500',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B002',
      'name' => "D'Sruput",
      'harga_beli' => '8000',
      'harga_jual' => '11000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B003',
      'name' => 'Slondok Matahari',
      'harga_beli' => '22000',
      'harga_jual' => '30000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B004',
      'name' => 'Almas Peyek',
      'harga_beli' => '13000',
      'harga_jual' => '17500',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B005',
      'name' => 'Almas Bayam',
      'harga_beli' => '13000',
      'harga_jual' => '17500',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B006',
      'name' => 'Almas Kembang Goyang',
      'harga_beli' => '11000',
      'harga_jual' => '15000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B007',
      'name' => 'Almas Keripik Tempe',
      'harga_beli' => '13000',
      'harga_jual' => '17500',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B008',
      'name' => 'Sale Pisang Rizki',
      'harga_beli' => '15000',
      'harga_jual' => '20000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B009',
      'name' => 'Klanting Rizki',
      'harga_beli' => '12000',
      'harga_jual' => '16000',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
      'kode_barang' => 'B010',
      'name' => 'Kecimpring',
      'harga_beli' => '10000',
      'harga_jual' => '13500',
      'sisa_stok' => '0',
      'masa_berlaku' => '4',
      'kepemilikan' => 'Titipan UMKM',
  ]);
  
  Product::create([
    'kode_barang' => 'B011',
    'name' => 'Qtela Tempe',
    'harga_beli' => '13000',
    'harga_jual' => '17500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B012',
    'name' => 'Dele Renyah',
    'harga_beli' => '10000',
    'harga_jual' => '13500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B013',
    'name' => 'Rambak Ikan Nila',
    'harga_beli' => '11000',
    'harga_jual' => '15000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B014',
    'name' => 'Basreng Tozi',
    'harga_beli' => '9000',
    'harga_jual' => '12000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B015',
    'name' => 'Basreng Riski',
    'harga_beli' => '9500',
    'harga_jual' => '12500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B016',
    'name' => 'Basreng Paijo',
    'harga_beli' => '15000',
    'harga_jual' => '20000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B017',
    'name' => 'Rengginang Manis',
    'harga_beli' => '14500',
    'harga_jual' => '19000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B018',
    'name' => 'Rengginang Gurih',
    'harga_beli' => '12500',
    'harga_jual' => '16000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B019',
    'name' => 'Rengginang Singkong',
    'harga_beli' => '13000',
    'harga_jual' => '17500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B020',
    'name' => 'Dakariz',
    'harga_beli' => '10000',
    'harga_jual' => '13500',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B021',
    'name' => 'King Potato',
    'harga_beli' => '15500',
    'harga_jual' => '20000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B022',
    'name' => 'Keripik Talas',
    'harga_beli' => '9000',
    'harga_jual' => '12000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
    'kode_barang' => 'B023',
    'name' => 'Telor Gabus',
    'harga_beli' => '5500',
    'harga_jual' => '7000',
    'sisa_stok' => '0',
    'masa_berlaku' => '4',
    'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B024',
  'name' => 'Yava',
  'harga_beli' => '7500',
  'harga_jual' => '10000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B025',
  'name' => 'Cenat Cenut',
  'harga_beli' => '8000',
  'harga_jual' => '11000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B026',
  'name' => 'Mushroom',
  'harga_beli' => '11500',
  'harga_jual' => '15000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B027',
  'name' => 'Banafam',
  'harga_beli' => '16000',
  'harga_jual' => '21000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B028',
  'name' => 'Shanana',
  'harga_beli' => '15000',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B029',
  'name' => 'Cheese Qu',
  'harga_beli' => '17000',
  'harga_jual' => '23000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B030',
  'name' => 'Nopia',
  'harga_beli' => '15500',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B031',
  'name' => 'Arumanis Bulat',
  'harga_beli' => '13000',
  'harga_jual' => '17500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B032',
  'name' => 'Abon Sapi Pouch Merah',
  'harga_beli' => '18000',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B033',
  'name' => 'Abon Sapi Pouch Kuning',
  'harga_beli' => '30000',
  'harga_jual' => '40500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B034',
  'name' => 'Abon Sapi Toples Kuning',
  'harga_beli' => '58000',
  'harga_jual' => '78000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B035',
  'name' => 'Abon Sapi Toples Merah',
  'harga_beli' => '42000',
  'harga_jual' => '58000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B036',
  'name' => 'Wedangqu',
  'harga_beli' => '11000',
  'harga_jual' => '15000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B037',
  'name' => 'Jaren',
  'harga_beli' => '18000',
  'harga_jual' => '24500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B038',
  'name' => 'Gula Semut Aren',
  'harga_beli' => '16000',
  'harga_jual' => '21500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B039',
  'name' => 'Batang Coffe Robusta',
  'harga_beli' => '15500',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B040',
  'name' => 'Batang Coffe Arabica',
  'harga_beli' => '23000',
  'harga_jual' => '30000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B041',
  'name' => 'E Kopi Robusta',
  'harga_beli' => '18000',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B042',
  'name' => 'E Kopi Arabica',
  'harga_beli' => '20000',
  'harga_jual' => '27000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B043',
  'name' => 'E Kopi Ekselsa',
  'harga_beli' => '18000',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B044',
  'name' => 'E Kopi Robusta Kecil',
  'harga_beli' => '14000',
  'harga_jual' => '19000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B045',
  'name' => 'Afieka Tea',
  'harga_beli' => '2000',
  'harga_jual' => '2500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B046',
  'name' => 'The Hijau Sangan Simbah Ori',
  'harga_beli' => '2000',
  'harga_jual' => '2500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B047',
  'name' => 'Jahe Niebos',
  'harga_beli' => '13000',
  'harga_jual' => '17000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B048',
  'name' => 'Manisan Gandul',
  'harga_beli' => '24500',
  'harga_jual' => '32000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B049',
  'name' => 'Kue Kacang',
  'harga_beli' => '36000',
  'harga_jual' => '47000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B050',
  'name' => 'Brownies Kering',
  'harga_beli' => '18500',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B051',
  'name' => 'Bolu Kering Ahsan',
  'harga_beli' => '23000',
  'harga_jual' => '30000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B052',
  'name' => 'Bagelan Ahsan',
  'harga_beli' => '15000',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B053',
  'name' => 'Hampers Cookies',
  'harga_beli' => '24000',
  'harga_jual' => '34000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B054',
  'name' => 'Seblak Bunga',
  'harga_beli' => '6000',
  'harga_jual' => '8000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B055',
  'name' => 'Seblak Warna',
  'harga_beli' => '5500',
  'harga_jual' => '7500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B056',
  'name' => 'Pangsit Cubit',
  'harga_beli' => '6000',
  'harga_jual' => '8000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B057',
  'name' => 'Pilus Bunga',
  'harga_beli' => '6000',
  'harga_jual' => '8000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B058',
  'name' => 'Pang Pang Pedas',
  'harga_beli' => '7000',
  'harga_jual' => '9500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B059',
  'name' => 'Pang Pang Manis',
  'harga_beli' => '7000',
  'harga_jual' => '9500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B060',
  'name' => 'Slondok Keriting',
  'harga_beli' => '7000',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B061',
  'name' => 'Tela Tela Kotak',
  'harga_beli' => '5500',
  'harga_jual' => '7000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B062',
  'name' => 'Pisang Aroma Pendek',
  'harga_beli' => '7000',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B063',
  'name' => 'Makaroni Nasgor Keju',
  'harga_beli' => '6000',
  'harga_jual' => '7500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B064',
  'name' => 'Makaroni Balado',
  'harga_beli' => '6000',
  'harga_jual' => '8000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B065',
  'name' => 'Twist Corn',
  'harga_beli' => '6000',
  'harga_jual' => '8000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B066',
  'name' => 'Untir Untir',
  'harga_beli' => '11500',
  'harga_jual' => '15000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B067',
  'name' => 'Kacang Atom',
  'harga_beli' => '7000',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B068',
  'name' => 'Emping Manis',
  'harga_beli' => '13000',
  'harga_jual' => '17000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B069',
  'name' => 'Klanting Merah Putih',
  'harga_beli' => '6000',
  'harga_jual' => '7500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B070',
  'name' => 'Cincin Udang Balado',
  'harga_beli' => '7000',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B071',
  'name' => 'Cincin Udang Ori',
  'harga_beli' => '7500',
  'harga_jual' => '10000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B072',
  'name' => 'Potato',
  'harga_beli' => '5500',
  'harga_jual' => '7000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B073',
  'name' => 'Stik Talas',
  'harga_beli' => '7500',
  'harga_jual' => '10000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B074',
  'name' => 'Kacang Koro',
  'harga_beli' => '7500',
  'harga_jual' => '9500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B075',
  'name' => 'Kacang Polong',
  'harga_beli' => '7500',
  'harga_jual' => '9500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B076',
  'name' => 'Tortila',
  'harga_beli' => '9000',
  'harga_jual' => '12000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B077',
  'name' => 'Samosa',
  'harga_beli' => '12500',
  'harga_jual' => '16000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B078',
  'name' => 'Stik Bawang Keju',
  'harga_beli' => '13000',
  'harga_jual' => '17000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B079',
  'name' => 'Stik Bawang Balado',
  'harga_beli' => '13000',
  'harga_jual' => '17000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B080',
  'name' => 'Krupuk Tengiri',
  'harga_beli' => '9000',
  'harga_jual' => '12000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B081',
  'name' => 'Krupuk Tahu',
  'harga_beli' => '9000',
  'harga_jual' => '12000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B082',
  'name' => 'Krupuk Tahu Parijot',
  'harga_beli' => '8500',
  'harga_jual' => '11000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B083',
  'name' => 'Keripik Pisang Manis',
  'harga_beli' => '10500',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B084',
  'name' => 'Mugewa Kering',
  'harga_beli' => '21000',
  'harga_jual' => '27000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B085',
  'name' => 'Bagelan Rq',
  'harga_beli' => '21000',
  'harga_jual' => '27000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B086',
  'name' => 'Cimoring',
  'harga_beli' => '8500',
  'harga_jual' => '11000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B087',
  'name' => 'Bola Choco',
  'harga_beli' => '15000',
  'harga_jual' => '19500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B088',
  'name' => 'Sale Pisang',
  'harga_beli' => '7000',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B089',
  'name' => 'Kue Sus Coklat',
  'harga_beli' => '13500',
  'harga_jual' => '17500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B090',
  'name' => 'Keripik Ubi Ungu',
  'harga_beli' => '7000',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B091',
  'name' => 'Keripik Singkong Balado',
  'harga_beli' => '9000',
  'harga_jual' => '11500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B092',
  'name' => 'Keripik Belut',
  'harga_beli' => '20000',
  'harga_jual' => '26000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B093',
  'name' => 'Usus',
  'harga_beli' => '7500',
  'harga_jual' => '9500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B094',
  'name' => 'Teh Rosela',
  'harga_beli' => '10000',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B095',
  'name' => 'Kacang Pilus Kroma',
  'harga_beli' => '7000',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B096',
  'name' => 'Keripik Nangka',
  'harga_beli' => '27500',
  'harga_jual' => '36000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B097',
  'name' => 'Robeena Sukamilk',
  'harga_beli' => '34000',
  'harga_jual' => '45000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B098',
  'name' => 'Keripik Pisang Lancar Asih',
  'harga_beli' => '15500',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B099',
  'name' => 'Soto Rawit Stick',
  'harga_beli' => '6000',
  'harga_jual' => '8000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B100',
  'name' => 'Bir Jawa',
  'harga_beli' => '10000',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B101',
  'name' => 'Wedang Uwuh',
  'harga_beli' => '10000',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B102',
  'name' => 'Wedang Telang',
  'harga_beli' => '12500',
  'harga_jual' => '16500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B103',
  'name' => 'Gujahe Sedawung',
  'harga_beli' => '13500',
  'harga_jual' => '17500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B104',
  'name' => 'Kerupuk Amplang',
  'harga_beli' => '7000',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B105',
  'name' => 'Kerupuk Pangsit 3 Putri',
  'harga_beli' => '10000',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B106',
  'name' => 'Afieka Lemon Tea',
  'harga_beli' => '15000',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B107',
  'name' => 'Zen Kopi Robusta',
  'harga_beli' => '16000',
  'harga_jual' => '22000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B108',
  'name' => 'Zen Kopi Arabika',
  'harga_beli' => '24000',
  'harga_jual' => '34000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B109',
  'name' => 'Pie Nanas',
  'harga_beli' => '22000',
  'harga_jual' => '30000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B110',
  'name' => 'Jajanan Amoh Salak',
  'harga_beli' => '16000',
  'harga_jual' => '21000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B111',
  'name' => 'Jajanan Amoh Apel',
  'harga_beli' => '18500',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B112',
  'name' => 'Jajanan Amoh Pisang',
  'harga_beli' => '14000',
  'harga_jual' => '18000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B113',
  'name' => 'Sus Coklat',
  'harga_beli' => '13000',
  'harga_jual' => '17500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B114',
  'name' => 'Astor Potong',
  'harga_beli' => '8000',
  'harga_jual' => '11000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B115',
  'name' => 'Semprong',
  'harga_beli' => '5500',
  'harga_jual' => '7000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B116',
  'name' => 'Cendol Keju',
  'harga_beli' => '5500',
  'harga_jual' => '7000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B117',
  'name' => 'Kacang Campur',
  'harga_beli' => '7000',
  'harga_jual' => '9500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B118',
  'name' => "D'Sruput Kecil",
  'harga_beli' => '7000',
  'harga_jual' => '9500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B119',
  'name' => 'Potato Mini Keju',
  'harga_beli' => '2500',
  'harga_jual' => '3500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B120',
  'name' => 'Coco Crunch',
  'harga_beli' => '3500',
  'harga_jual' => '5000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B121',
  'name' => 'Nastar Ori',
  'harga_beli' => '46000',
  'harga_jual' => '60000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B122',
  'name' => 'Nastar Keju',
  'harga_beli' => '24000',
  'harga_jual' => '34000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B123',
  'name' => 'Putri Salju',
  'harga_beli' => '24000',
  'harga_jual' => '34000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B124',
  'name' => 'Kastengel',
  'harga_beli' => '24000',
  'harga_jual' => '34000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B125',
  'name' => 'Semprit Coklat',
  'harga_beli' => '46000',
  'harga_jual' => '60000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B126',
  'name' => 'Semprit Susu',
  'harga_beli' => '41500',
  'harga_jual' => '54000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B127',
  'name' => 'Kue Kacang Badzlin',
  'harga_beli' => '41500',
  'harga_jual' => '54000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B128',
  'name' => 'Keripik Usus Ahsan',
  'harga_beli' => '12000',
  'harga_jual' => '16000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
]);

Product::create([
  'kode_barang' => 'B129',
  'name' => 'Keripik Kerang Ahsan',
  'harga_beli' => '16000',
  'harga_jual' => '21000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B130',
  'name' => 'Basreng Ahsan',
  'harga_beli' => '15000',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B131',
  'name' => 'Keripik Tempe Ahsan',
  'harga_beli' => '11000',
  'harga_jual' => '15000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B132',
  'name' => 'Kue Satru Aulya',
  'harga_beli' => '33000',
  'harga_jual' => '43000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B133',
  'name' => 'Bakpia Jogja Qu',
  'harga_beli' => '19000',
  'harga_jual' => '25000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B134',
  'name' => 'Inaco',
  'harga_beli' => '13000',
  'harga_jual' => '18000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B135',
  'name' => 'Bola Warna',
  'harga_beli' => '6500',
  'harga_jual' => '9000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B136',
  'name' => 'Kecimpring Matang',
  'harga_beli' => '10000',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B137',
  'name' => 'Keripik Nanas Ori',
  'harga_beli' => '15000',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B138',
  'name' => 'Keripik Nanas Coklat',
  'harga_beli' => '1600',
  'harga_jual' => '21500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B139',
  'name' => 'Jalu',
  'harga_beli' => '15500',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B140',
  'name' => 'Basnas',
  'harga_beli' => '15500',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B141',
  'name' => 'Zen Kopi Ekselsa',
  'harga_beli' => '13000',
  'harga_jual' => '17500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B142',
  'name' => 'Sale Pisang 250 gr',
  'harga_beli' => '13000',
  'harga_jual' => '17500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B143',
  'name' => 'Rengginang Ketan Hitam',
  'harga_beli' => '15000',
  'harga_jual' => '20000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);

Product::create([
  'kode_barang' => 'B144',
  'name' => 'Sale Oven',
  'harga_beli' => '18000',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B145',
  'name' => 'Sangan Simbah Celup',
  'harga_beli' => '9000',
  'harga_jual' => '15500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B146',
  'name' => 'Sangan Simbah Kotak',
  'harga_beli' => '23000',
  'harga_jual' => '31000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B147',
  'name' => 'Setup Nanas Mini',
  'harga_beli' => '8500',
  'harga_jual' => '11000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B148',
  'name' => 'Setup Nanas Box',
  'harga_beli' => '17000',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B149',
  'name' => 'Ogel-Ogel Box',
  'harga_beli' => '104000',
  'harga_jual' => '135000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B150',
  'name' => 'Ogel-Ogel',
  'harga_beli' => '21000',
  'harga_jual' => '27000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B151',
  'name' => 'Cheese Qu Kecil',
  'harga_beli' => '10500',
  'harga_jual' => '14000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B152',
  'name' => 'Setup Nanas Besar',
  'harga_beli' => '16000',
  'harga_jual' => '22000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B153',
  'name' => 'Telur Asin Bakar',
  'harga_beli' => '35000',
  'harga_jual' => '47000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B154',
  'name' => 'Permen Jahe',
  'harga_beli' => '10000',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B155',
  'name' => 'Egg Drop',
  'harga_beli' => '8000',
  'harga_jual' => '11000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B156',
  'name' => 'Ekopi Arabika Kecil',
  'harga_beli' => '18500',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B157',
  'name' => 'Keripik Brownies',
  'harga_beli' => '16000',
  'harga_jual' => '21000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B158',
  'name' => 'Ogel-Ogel Kecil',
  'harga_beli' => '60000',
  'harga_jual' => '81000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);

Product::create([
  'kode_barang' => 'B159',
  'name' => 'Ekopi Arabika New Pouch',
  'harga_beli' => '22000',
  'harga_jual' => '30000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B160',
  'name' => 'Puyur Matahari',
  'harga_beli' => '22000',
  'harga_jual' => '30000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B161',
  'name' => 'Kentang Mustofa Ori',
  'harga_beli' => '8000',
  'harga_jual' => '11000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B162',
  'name' => 'Kentang Mustofa',
  'harga_beli' => '10000',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B163',
  'name' => 'Mie Biting Toples',
  'harga_beli' => '16500',
  'harga_jual' => '23000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B164',
  'name' => 'Abon Ori Tazko',
  'harga_beli' => '17000',
  'harga_jual' => '24000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B165',
  'name' => 'Abon Pedas Tazko',
  'harga_beli' => '18000',
  'harga_jual' => '26000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B166',
  'name' => 'Abon Ori Kecil',
  'harga_beli' => '10000',
  'harga_jual' => '13500',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
Product::create([
  'kode_barang' => 'B167',
  'name' => 'Abon Pedas Kecil',
  'harga_beli' => '11000',
  'harga_jual' => '15000',
  'sisa_stok' => '0',
  'masa_berlaku' => '4',
  'kepemilikan' => 'Titipan UMKM',
  
]);
    
    }
}
