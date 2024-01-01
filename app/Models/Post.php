<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    public $table = 'post';
    protected $fillable = [
        'user_id',
        'image',
        'caption'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function teacher() : BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
   

    /*public function user(): HasOne{
        return $this->hasOne(User::class, 'user_id');
    }*/
}
