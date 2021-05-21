<?php

namespace App\Exports;

use App\Models\Tv;
use Maatwebsite\Excel\Concerns\FromCollection;

class TvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tv::all();
    }
}
