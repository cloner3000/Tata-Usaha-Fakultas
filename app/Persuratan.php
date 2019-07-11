<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persuratan extends Model
{
    protected $table = "persuratan";
    protected $fillable = [
        'nim_mahasiswa',
        'nomor_surat',
        'kode_surat',
        'detail_surat',
        'status'
    ];
 
    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
    public function detailPKL()
    {
        return $this->hasOne('App\DetailPKL');
    }
    public function detailIzinPenelitian()
    {
        return $this->hasOne('App\DetailIzinPenelitian');
    }
    public function detailSKKB()
    {
        return $this->hasOne('App\DetailSKKB');
    }
    public function detailMasihKuliah()
    {
        return $this->hasOne('App\DetailMasihKuliah');
    }
    public function detailIzinObservasi()
    {
        return $this->hasOne('App\DetailIzinObservasi');
    }
}
