<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bkk extends Model
{
   public function sekolah()
   {
    return $this->belongsTo('App\Sekolah');
   }

   public function loker()
   {
      return $this->belongsToMany('App\Loker');
   }
}
