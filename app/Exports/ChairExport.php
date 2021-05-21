<?php

namespace App\Exports;

use App\Models\Chair;
use Maatwebsite\Excel\Concerns\FromCollection;

class ChairExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Chair::all();
    }
}
