<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'username', 'password', 'hp', 'role', 'password_length'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
        $this->attributes['password_length'] = strlen($value);
    }
}
