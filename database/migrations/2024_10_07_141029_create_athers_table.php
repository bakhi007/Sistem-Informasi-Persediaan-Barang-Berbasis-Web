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
      Schema::create('athers', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained(
          table: 'products', indexName: 'athers_product_id'
      );
        $table->foreignId('type_id')->constrained(
          table: 'types', indexName: 'athers_type_id'
      );
        $table->integer('stok_keluar');
        $table->dateTime('tanggal_keluar');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athers');
    }
};
