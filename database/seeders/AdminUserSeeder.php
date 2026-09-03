<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@sena.edu.co'],
            [
                'name' => 'Administrador Principal',
                'password' => Hash::make('Admin123456*'),
                'role' => 'admin',
            ]
        );
    }
}