<?php

namespace App\Exports;

use App\Models\Headset;
use Maatwebsite\Excel\Concerns\FromCollection;

class HeadsetExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Headset::all();
    }
}
