<?php

namespace Author\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'edition',
        'isbn',
        'company',
        'cover',
        'description',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
