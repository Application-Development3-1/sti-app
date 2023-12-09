<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LostItem extends Model
{
    use HasFactory;

    public $table = 'lost_item';
    protected $fillable = [
        'user_id',
        'what',
        'when',
        'where',
        'additional',
        'image'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
