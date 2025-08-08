<?php

namespace Database\Seeders;

use app\Models\Ekskul;
use app\models\user;
use Illuminate\Database\Seeder;

class EkskulSeeder extends Seeder
{
    public function run(): void
    {
        $guruOlaharaga = User::where('nip','0987654321')->first();
        $guruSeni = User::where('nip', '1122334455')->first();

        Ekskul::create([
            'nama_ekskul' => 'voli',
            'deskripsi' => 'mengembangkan teknik dan strategi bermain bola voli',
            'kuota' => '25',
            'jadwal' => 'Senin dan Rabu, 16:00 - 17:00',
            'lokasi' => 'Lapangan Voli',
            'guru_pembingbing' => $guruOlaharaga->id ?? null,
        ]);

        Ekskul::create([
            'nama_ekskul' => 'teater',
            'deskripsi' => 'meningkatkan kreativitas',
            'kuota' => '25',
            'jadwal' => 'Setiap Jumat 12:00 - 14:00',
            'lokasi' => 'Aula Seni',
            'guru_pembingbing' => $guruSeni->id ?? null,
        ]);

         Ekskul::create([
            'nama_ekskul' => 'Basket',
            'deskripsi' => 'melatih kemampuan dalam bermain bola basket',
            'kuota' => '40',
            'jadwal' => 'Senin 12:00 - 14:00',
            'lokasi' => 'Lanpangan Basket',
            'guru_pembingbing' => $guruOlaharaga->id ?? null,
        ]);

         Ekskul::create([
            'nama_ekskul' => 'karawitan',
            'deskripsi' => 'meningkatkan seni dalam bidang gamelan',
            'kuota' => '25',
            'jadwal' => 'Setiap rabu 14:00 - 15:00',
            'lokasi' => 'Aula Seni',
            'guru_pembingbing' => $guruSeni->id ?? null,
        ]);
        


    }
}
