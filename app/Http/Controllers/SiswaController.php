<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $kursus = Kursus::all();
        return view('tambahsiswa', compact('kursus'));
    }

    public function store(Request $request)
    {
        // new database untuk siswa
        $siswa = new Siswa();
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->nama_kursus = $request->nama_kursus;
        $siswa->tanggal_pendaftaran = $request->tanggal_pendaftaran;
        $siswa->status_pembayaran = $request->status_pembayaran;
        $siswa->save();

        return redirect()->route('dashboard');
    }

}
