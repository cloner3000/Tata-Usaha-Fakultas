<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    protected $table = "jenis_surat";
    protected $fillable = [
        'kode surat',
        'jenis_surat'
    ];

    public function persuratan()
    {
        return $this->hasMany('App\Persuratan');
    }
}
