<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailIzinObservasi extends Model
{
    protected $table = "detail_izin_observasi";
    protected $fillable = [
        'mahasiswa_id',
        'mata_kuliah',
        'lokasi_observasi'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
