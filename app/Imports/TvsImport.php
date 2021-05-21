<?php

namespace App\Imports;

use App\Models\Tv;
use Maatwebsite\Excel\Concerns\ToModel;

class TvsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Tv([
        'brand'          => $row['0'],           
        'model'          => $row['1'],
        'inch'           => $row['2'],
        'hz'             => $row['3'],
        'type'           => $row['4'],
        'year'           => $row['5'],
        'system'         => $row['6'],
        'wifi'           => $row['7'],
        'description'    => $row['8'],
        'comment'        => $row['9'],
        'available'      => $row['10']  
        ]);
    }
}











