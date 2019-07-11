<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPKL extends Model
{
    protected $table = "detail_pkl";
    protected $fillable = [
        'mahasiswa_id',
        'nama_instansi',
        'alamat_instansi'
    ];

    public function persuratan()
    {
        return $this->belongsTo('App\Persuratan');
    }
}