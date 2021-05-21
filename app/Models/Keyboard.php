<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'brand',
        'model',
        'keycap',
        'form',
        'type',
        'year',
        'ckey',
        'rgb',
        'description',
        'comment',
        'available'
    ];
}
