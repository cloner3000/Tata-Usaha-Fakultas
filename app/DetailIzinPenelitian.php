<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailIzinPenelitian extends Model
{
    protected $table = "detail_izin_penelitian";
    protected $fillable = [
        'mahasiswa_id',
        'lokasi_penelitian',
        'alamat_lokasi'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
