<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model {
  public $timestamps = false;

  protected $fillable = ['series'];

  public function book(){
    return $this->hasMany(book::class);
  }
}