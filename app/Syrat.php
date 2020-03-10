<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syrat extends Model
{
    protected $guarded = [];

    public function layanan() {
        return $this->belongsTo(Layanan::class);
    }
}
