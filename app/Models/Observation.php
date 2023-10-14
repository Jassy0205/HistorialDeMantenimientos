<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'ram',
        'cpu',
    ];

    public function user() : BelongsTo
    {
        return $this -> belongsTo(User::class, 'owner');
    }
}
