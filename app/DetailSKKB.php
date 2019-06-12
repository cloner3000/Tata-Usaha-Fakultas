<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailSKKB extends Model
{
    protected $table = "detail_skkb";
    protected $fillable = [
        'keperluan'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
