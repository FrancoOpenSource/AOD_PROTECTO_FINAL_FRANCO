<?php

namespace App\Imports;

use App\Models\Chair;
use Maatwebsite\Excel\Concerns\ToModel;

class ChairsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Chair([
        'brand'          => $row['0'],           
        'model'          => $row['1'],
        'color'          => $row['2'],
        'rgb'            => $row['3'],
        'material'       => $row['4'],
        'year'           => $row['5'],
        'weight'         => $row['6'],
        'fixed'          => $row['7'],
        'description'    => $row['8'],
        'comment'        => $row['9'],
        'available'      => $row['10']  
        ]);
    }
}











