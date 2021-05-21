<?php

namespace App\Exports;

use App\Models\Keyboard;
use Maatwebsite\Excel\Concerns\FromCollection;

class KeyboardExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Keyboard::all();
    }
}
