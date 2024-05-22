<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $timestamps = false;

    protected $fillable = ['genre'];

    public function book(): HasMany
    {
        return $this->hasMany(book::class);
    }
}
