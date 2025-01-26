<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            [
                'nama_siswa' => 'Agus Pratama',
                'nama_kursus' => 'Belajar MySQL Dasar',
                'tanggal_pendaftaran' => '2024-03-28 10:00:00',
                'status_pembayaran' => 1,
            ],
            [
                'nama_siswa' => 'Budi Santoso',
                'nama_kursus' => 'MySQL Lanjutan',
                'tanggal_pendaftaran' => '2024-01-01 10:00:00',
                'status_pembayaran' => 0,
            ],
            [
                'nama_siswa' => 'Citra Dewi',
                'nama_kursus' => 'Optimasi MySQL',
                'tanggal_pendaftaran' => now(),
                'status_pembayaran' => 0,
            ],
            [
                'nama_siswa' => 'Dian Prakoso',
                'nama_kursus' => 'MySQL dan PHP',
                'tanggal_pendaftaran' => now(),
                'status_pembayaran' => 0,
            ],
            [
                'nama_siswa' => 'Eko Purwanto',
                'nama_kursus' => 'MySQL untuk Data Analytics',
                'tanggal_pendaftaran' => '2023-02-14 09:15:00',
                'status_pembayaran' => 1,
            ],
            [
                'nama_siswa' => 'Fajar Ristanto',
                'nama_kursus' => 'Belajar MySQL Dasar',
                'tanggal_pendaftaran' => '2023-02-15 14:45:00',
                'status_pembayaran' => 1,
            ],
            [
                'nama_siswa' => 'Gita Lestari',
                'nama_kursus' => 'MySQL Lanjutan',
                'tanggal_pendaftaran' => '2023-02-12 10:00:00',
                'status_pembayaran' => 1,
            ],
            [
                'nama_siswa' => 'Hadi Saputra',
                'nama_kursus' => 'Optimasi MySQL',
                'tanggal_pendaftaran' => '2023-02-13 11:30:00',
                'status_pembayaran' => 1,
            ],
            [
                'nama_siswa' => 'Indra Wijaya',
                'nama_kursus' => 'MySQL dan PHP',
                'tanggal_pendaftaran' => now(),
                'status_pembayaran' => 0,
            ],
            [
                'nama_siswa' => 'Joko Supriyanto',
                'nama_kursus' => 'MySQL untuk Data Analytics',
                'tanggal_pendaftaran' => now(),
                'status_pembayaran' => 0,
            ],
        ]);
    }
}
