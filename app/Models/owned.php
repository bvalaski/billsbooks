<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owned extends Model
{
    protected $table = 'owned';

    protected $fillable = ['owned_status'];

    public $timestamps = false;

    public function book(): HasMany
    {
        return $this->hasMany(book::class);
    }
}
