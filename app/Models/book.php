<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'isbn', 'published', 'date_read', 'rating', 'genre_id', 'author_id',
        'coauthor_id', 'series_id', 'owned_id', 'comments'];

    public function genre(): HasOne
    {
        return $this->hasOne(genre::class, 'id', 'genre_id');
    }

    public function author(): HasOne
    {
        return $this->hasOne(author::class, 'id', 'author_id');
    }

    public function coauthor(): HasOne
    {
        return $this->hasOne(author::class, 'id', 'coauthor_id');
    }

    public function series(): HasOne
    {
        return $this->hasOne(series::class, 'id', 'series_id');
    }

    public function owned(): HasOne
    {
        return $this->hasOne(owned::class, 'id', 'owned_id');
    }
}
