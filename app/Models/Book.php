<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'user_id', 'isbn','description'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
