<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Genre', 'genre_id');
    }
}
