<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $guarded = [] ;


    public function syrats(){
      return $this->hasMany(Syrat::class);
    }

}
