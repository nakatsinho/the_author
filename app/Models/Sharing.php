<?php

namespace Author\Models;

use Illuminate\Database\Eloquent\Model;

class Sharing extends Model
{
    protected $fillable = [
        'shared_id',
        'user_id',
        'book_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
