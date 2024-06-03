<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    public $timestamps = false;

    protected $fillable = ['genre'];

    public function book(): HasMany
    {
        return $this->hasMany(book::class);
    }
}
