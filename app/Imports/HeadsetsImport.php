<?php

namespace App\Imports;

use App\Models\Headset;
use Maatwebsite\Excel\Concerns\ToModel;

class HeadsetsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Headset([
            'brand'             => $row['0'],
            'model'             => $row['1'],
            'color'             => $row['2'],
            'serialNumber'      => $row['3'],
            'type'              => $row['4'],
            'year'              => $row['5'],
            'rgb'               => $row['6'],            
            'description'       => $row['7'],
            'comment'           => $row['8'],
            'available'         => $row['9'],
        ]);
    }
}
