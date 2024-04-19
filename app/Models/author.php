<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstname', 'lastname'];

    public function book()
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
