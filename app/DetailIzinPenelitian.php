<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailIzinPenelitian extends Model
{
    protected $table = "detail_pkl";
    protected $fillable = [
        'lokasi_penelitian',
        'alamat_lokasi'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
