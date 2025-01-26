<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function store(Request $request)
    {
        // Validasi Input Kursus
        $request->validate([
            'nama_kursus' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'status' => 'required|string',
        ]);
        // Create new database
        $kursus = new Kursus();
        $kursus->nama_kursus = $request->nama_kursus;
        $kursus->deskripsi = $request->deskripsi;
        $kursus->harga = $request->harga;
        $kursus->status = $request->status;
        $kursus->save();

        return redirect()->route('dashboard');
    }
}
