<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Mahasiswa::create([
            'nama' => 'Faiz Rahmadani',
            'nim' => '112',
            'email' => 'fzrahmadan@gmail.com',
            'domisili' => 'Bekasi',
            'jurusan' => 'Teknik Fisika'
        ]);
        Mahasiswa::create([
            'nama' => 'Hana Nabilah',
            'nim' => '144',
            'email' => 'haanabila.com',
            'domisili' => 'Surabaya',
            'jurusan' => 'Sastra Inggris'
        ]);
        Mahasiswa::create([
            'nama' => 'Wahyu Yoga',
            'nim' => '125',
            'email' => 'wahyog@gmail.com',
            'domisili' => 'Blitar',
            'jurusan' => 'Teknik Mesin'
        ]);
    }
}
