<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Series extends Model
{
    public $timestamps = false;

    protected $fillable = ['series'];

    public function book(): HasMany
    {
        return $this->hasMany(book::class);
    }
}
