<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    protected $table = 'loker';
    public function bkk()
    {
        return $this->belongsToMany('App\Bkk');
    }

    public function posterloker()
    {
        return $this->hasMany('App\PosterLoker');
    }
}
