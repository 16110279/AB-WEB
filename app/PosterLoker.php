<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PosterLoker extends Model
{
    public function loker()
    {
        return $this->belongsTo('App\Loker');
    }
}
