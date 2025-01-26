<?php

namespace App\Imports;

use App\Models\Kursus;
use Maatwebsite\Excel\Concerns\ToModel;

class KursusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kursus([
            'nama_kursus' => $row[0],
            'deskripsi' => $row[1],
            'harga' => intval($row[2]),
            'status' => $row[3],
        ]);
        // Setiap Index untuk penyebutkan column pada xlsx
    }
}
