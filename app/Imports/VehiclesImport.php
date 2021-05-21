<?php

namespace App\Imports;

use App\Models\Vehicle;
use Maatwebsite\Excel\Concerns\ToModel;

class VehiclesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vehicle([
            'brand'             => $row['0'],
            'model'             => $row['1'],
            'color'             => $row['2'],
            'serialNumber'      => $row['3'],
            'carRegistration'   => $row['4'],
            'numberOfDoors'     => $row['5'],
            'numberOfSeats'     => $row['6'],
            'mileage'           => $row['7'],
            'cylinderCapacity'  => $row['8'],
            'description'       => $row['9'],
            'comment'           => $row['10'],
            'available'         => $row['11'],
        ]);
    }
}
