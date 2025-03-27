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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('room_id')->nullable(); 
            $table->string('no_kamar')->nullable();
            $table->string('nama');
            $table->string('tipe_kamar'); // Customer memilih tipe kamar, bukan nomor kamar
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('jumlah_tamu');
            $table->enum('status_pemesanan', ['Pending', 'Confirmed', 'Checked-In', 'Canceled', 'Completed'])->default('Pending');
            $table->enum('status_pembayaran', ['Pending', 'Paid', 'Verified'])->default('Pending');
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
