<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function sekolah()
    {
        return $this->belongsTo('App\Sekolah');
    }
}
