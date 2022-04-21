<?php

namespace App\Imports;

use App\Models\Wo;
use Maatwebsite\Excel\Concerns\ToModel;

class WoImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Wo([
            'nama' => $row[1],
            'pekerjaan_temuan' => $row[2],
            'lokasi' => $row[3],
            'tgl_open' => $row[4],
            'jam_open' => $row[5],
            'bidang_pekerjaan' => $row[6],
            'status_pekerjaan' => $row[7],
            'pic' => $row[8],
            'tgl_close' => $row[9],
            'jam_close' => $row[10],
            'penyebab' => $row[11],
            'tindakan' => $row[12],
            'jenis_pekerjaan' => $row[13],
            'material' => $row[14],
            'ket' => $row[15],
            'foto_open' => $row[16],
            'foto_close' => $row[17],


        ]);
    }
}
