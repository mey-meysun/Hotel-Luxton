<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_kamar',
        'tipe_kamar',
        'harga_kamar',
        'status_kamar',
        'gambar',
        'deskripsi_kamar',
    ];

}