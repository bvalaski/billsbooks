<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owned extends Model {
  protected $table = 'owned';
  
  public $timestamps = false;

  public function book(){
    return $this->hasMany(book::class);
  }
}