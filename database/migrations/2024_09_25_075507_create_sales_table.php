<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('sales', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained(
          table: 'products', indexName: 'sales_product_id'
      );
        $table->integer('stok_keluar');
        $table->integer('harga_jual');
        $table->integer('jumlah_harga_jual');
        $table->integer('diskon');
        $table->integer('total_harga_jual');
        $table->integer('uang_terima');
        $table->integer('kembalian');
        $table->dateTime('tanggal_penjualan');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
