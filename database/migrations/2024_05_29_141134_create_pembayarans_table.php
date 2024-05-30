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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tagihan');
            $table->foreign('id_tagihan')->references('id')->on('tagihans');
            $table->decimal('jumlah_dibayar', 10, 2);
            $table->date('tanggal_bayar');
            $table->string('metode_pembayaran', 50);
            $table->binary('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
