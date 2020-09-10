<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = [
    'name'
  ];

  // public function albums() {
  //   return $this->hasMany('App\Album');
  // }

  public function albums() {
    return $this->belongsToMany('App\Album');
  }
}
