<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::insert([
            [
                'nama' => 'John Doe',
                'email' => 'john@gmail.com',
                'username' => 'john',
                'password' => Hash::make('123'),
                'hp' => '085715431336',
                'role' => 'customer',
            ],
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => Hash::make('234'),
                'hp' => '087655431276',
                'role' => 'admin',
            ]
        ]);
    }
}
