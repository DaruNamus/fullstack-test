<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KursusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kursus')->insert([
            [
                'nama_kursus' => 'Belajar MySQL Dasar',
                'deskripsi' => 'Kursus pengenalan MySQL untuk pemula.',
                'harga' => 100000,
                'status' => 'aktif',
            ],
            [
                'nama_kursus' => 'MySQL Lanjutan',
                'deskripsi' => 'Memperdalam pengetahuan MySQL.',
                'harga' => 150000,
                'status' => 'aktif',
            ],
            [
                'nama_kursus' => 'Optimasi MySQL',
                'deskripsi' => 'Teknik optimasi performa database MySQL.',
                'harga' => 200000,
                'status' => 'tidak aktif',
            ],
            [
                'nama_kursus' => 'MySQL dan PHP',
                'deskripsi' => 'Integrasi MySQL dengan aplikasi PHP.',
                'harga' => 175000,
                'status' => 'aktif',
            ],
            [
                'nama_kursus' => 'MySQL untuk Data Analytics',
                'deskripsi' => 'Menggunakan MySQL untuk analisis data.',
                'harga' => 220000,
                'status' => 'aktif'
            ],
        ]);
    }
}
