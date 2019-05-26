<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPKL extends Model
{
    protected $table = "detail_pkl";

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}