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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('jumlah_tamu');
            $table->string('tipe_kamar');
            $table->string('no_kamar');
            $table->enum('status_pembayaran', ['pending, paid, verified']);
            $table->enum('status_pemesanan', ['pending, confirmed, checked-In, canceled, completed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
