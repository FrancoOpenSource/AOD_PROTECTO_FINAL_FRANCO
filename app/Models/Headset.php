<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headset extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'brand', 'model', 
        'color', 'serialNumber', 
        'type', 'year', 'rgb', 'description', 
        'comment', 'available'
    ];
}
