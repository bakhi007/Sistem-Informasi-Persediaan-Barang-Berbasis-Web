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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained(
              table: 'products', indexName: 'purchases_product_id'
          );
            $table->string('kode_produksi');
            $table->integer('stok_masuk');
            $table->integer('harga_beli');
            $table->integer('jumlah_harga_beli');
            $table->dateTime('tanggal_produksi');
            $table->dateTime('tanggal_kedaluwarsa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
