<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama_siswa',
        'nama_kursus',
        'tanggal_pendaftaran',
        'status_pembayaran',
    ];
}
