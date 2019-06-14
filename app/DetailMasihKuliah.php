<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailMasihKuliah extends Model
{
    protected $table = "detail_masih_kuliah";
    protected $fillable = [
        'mahasiswa_id',
        'nama_orang_tua',
        'nip_orang_tua',
        'pangkat_golongan',
        'nama_instansi'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
