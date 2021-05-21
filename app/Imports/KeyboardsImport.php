<?php

namespace App\Imports;

use App\Models\Keyboard;
use Maatwebsite\Excel\Concerns\ToModel;

class KeyboardsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Keyboard([
            'brand'             => $row['0'],
            'model'             => $row['1'],
            'keycap'            => $row['2'],
            'form'              => $row['3'],
            'type'              => $row['4'],
            'year'              => $row['5'],
            'ckey'              => $row['6'],
            'rgb'               => $row['7'],
            'description'       => $row['8'],
            'comment'           => $row['9'],
            'available'         => $row['10'],
        ]);
    }
}
