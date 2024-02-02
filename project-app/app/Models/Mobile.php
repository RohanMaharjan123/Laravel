<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;
class Mobile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'modal',
        'price',
    ];

    public function device(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
