<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'brand',
        'model',
        'color',
        'rgb',
        'material',
        'year',
        'weight',
        'fixed',
        'description',
        'comment',
        'available'
    ];
}
