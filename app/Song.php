<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
      'title',
      'genre',
      'album_id',
    ];

    public function songs() {
      return $this->belongsTo('App\Album');
    }
}
