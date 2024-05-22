<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class CoAuthor extends Model
{
    public function book(): HasMany
    {
        return $this->hasMany(book::class);
    }
}
