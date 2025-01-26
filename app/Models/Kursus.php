<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    // Jumlah Siswa Count
    public function getJumlahSiswaAttribute()
    {
        return Siswa::where('nama_kursus', $this->nama_kursus)->count();
    }
    use HasFactory;
    protected $table = 'kursus';

    protected $fillable = [
        'nama_kursus',
        'deskripsi',
        'harga',
        'status',
    ];
}
