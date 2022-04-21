<?php

namespace App\Exports;

use App\Models\Wo;
use Maatwebsite\Excel\Concerns\FromCollection;

class WoExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Wo::all();
    }
}
