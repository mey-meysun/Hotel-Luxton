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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('no_kamar');
            $table->string('tipe_kamar');
            $table->decimal('harga_kamar', 8, 2);
            $table->enum('status_kamar', ['tersedia', 'terisi', 'diperbaiki']);
            $table->string('gambar');
            $table->text('deskripsi_kamar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
