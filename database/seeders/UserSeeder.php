<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'admin Utama',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'nip' => '1234567890',
            'nis' => 'null',

        ]);

        User::created([
            'name' => 'Guru Olahraga',
            'email' => 'Guru.Olahraga@example.com',
            'password' => Hash::make('password'),
            'role' => 'guru',
            'nip' => '0987654321',
            'nis' => 'null',
        ]);

         User::created([
            'name' => 'Guru Seni',
            'email' => 'Guru.Seni@example.com',
            'password' => Hash::make('password'),
            'role' => 'guru',
            'nip' => '1122334455',
            'nis' => 'null',
        ]);

         User::created([
            'name' => 'parhan',
            'email' => 'parhan@example.com',
            'password' => Hash::make('password'),
            'role' => 'siswa',
            'nis' => '55555',
            'nip' => 'null',
        ]);

        User::created([
            'name' => 'siti',
            'email' => 'siti@example.com',
            'password' => Hash::make('password'),
            'role' => 'siswa',
            'nis' => '66666',
            'nip' => 'null',
        ]);
    }
}
