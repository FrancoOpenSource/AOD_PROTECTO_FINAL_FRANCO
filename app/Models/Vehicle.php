<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'brand', 'model', 'color', 'serialNumber', 'carRegistration', 'numberOfDoors', 'numberOfSeats', 'mileage', 'cylinderCapacity', 'description', 'comment', 'available'
    ];

}
