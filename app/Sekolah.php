<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    public function bkk()
    {
        return $this->hasOne('App\Bkk') ;
    }

    public function siswa()
    {
        return $this->hasMany('App\Siswa');
    }
}
