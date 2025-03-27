<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'room_id','nama', 'no_kamar', 'tipe_kamar', 'check_in', 'check_out', 'jumlah_tamu', 'status_pemesanan', 'status_pembayaran'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Foreign key di tabel reservations
    }
    
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id'); // Foreign key di tabel reservations
    }
    
}
