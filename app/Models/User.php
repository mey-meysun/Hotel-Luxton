<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nama', 'email', 'username', 'password', 'hp', 'role'];
}
