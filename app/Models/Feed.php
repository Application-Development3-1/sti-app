<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    public $table = 'feedpost';
    protected $fillable = [
        'image',
        'caption'
    ];
}
