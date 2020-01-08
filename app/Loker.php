<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    public function bkk()
    {
        return $this->belongsToMany('App\Bkk');
    }

    public function posterloker()
    {
        return $this->hasMany('App\PosterLoker');
    }
}
