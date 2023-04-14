<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owned extends Model {
  protected $table = 'owned';
  
  protected $fillable = ['owned_status'];

  public $timestamps = false;

  public function book(){
    return $this->hasMany(book::class);
  }
}