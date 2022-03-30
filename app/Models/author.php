<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {
    public function book(){
      return $this->hasMany(book::class);
  }
}