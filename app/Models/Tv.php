<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'brand',
        'model',
        'inch',
        'hz',
        'type',
        'year',
        'system',
        'wifi',
        'description',
        'comment',
        'available'
    ];
}
