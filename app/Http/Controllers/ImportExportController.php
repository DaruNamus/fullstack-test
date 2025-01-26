<?php

namespace App\Http\Controllers;

use App\Imports\KursusImport;
use App\Models\Kursus;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf as FacadePDF;

class ImportExportController extends Controller
{
    public function import(Request $request){
        //Validasi file type
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);
        //Import uploaded files
        Excel::import(new KursusImport, $request->file('file'));

        return redirect()->route('dashboard');
    }

    public function exportPDF()
    {
        $kursus = Kursus::select('nama_kursus', 'deskripsi', 'harga', 'status')->get();
        // Calculate jumlah_siswa for each kursus
        foreach ($kursus as $kursusItem) {
            $kursusItem->jumlah_siswa = $kursusItem->getJumlahSiswaAttribute();
        }
        // Export to PDF menggunakan layout pdftemplate.pdf
        $pdf = FacadePDF::loadView('pdftemplate.pdf', compact('kursus'));
        return $pdf->download('kursus.pdf');
    }
}
