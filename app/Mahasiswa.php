<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $fillable = [
        'nama_mahasiswa',
        'nim',
        'kode_prodi',
        'semester',
        'tanggal_lahir',
        'alamat',
        'no_telepon'
    ];

    public function persuratan()
    {
        return $this->hasMany('App\Persuratan');
    }
}
