<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailSKKB extends Model
{
    protected $table = "detail_skkb";
    protected $fillable = [
        'mahasiswa_id',
        'keperluan'
    ];

    public function persuratan()
    {
        return $this->belongsTo('App\Persuratan');
    }
}
