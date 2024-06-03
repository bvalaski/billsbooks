<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    protected $fillable = ['firstname', 'lastname'];

    public function book(): HasMany
    {
        return $this->hasMany(book::class);
    }

    public function authBookCount()
    {
        return $this->Author::withCount('book')->get();
    }

    public function authBooks($authID)
    {
        return $this->Author::find($authID)->book;
    }
}
