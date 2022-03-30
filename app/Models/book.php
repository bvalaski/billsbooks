<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
	
  protected $fillable = ['title','isbn','date_read','genre_id', 'author_id', 'comments'];

  public function genre() {
    return $this->hasOne(genre::class, 'id','genre_id');
  }

  public function author() {
    return $this->hasOne(author::class,'id','author_id');
  }

 }

 