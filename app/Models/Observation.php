<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user',
        'category',
        'owner',
    ];

    public function computer() : BelongsTo
    {
        return $this -> belongsTo(Computer::class, 'machine');
    }

    public function user() : BelongsTo
    {
        return $this -> belongsTo(User::class, 'owner');
    }

    public function category() : BelongsTo
    {
        return $this -> belongsTo(Category::class, 'category');
    }
}
