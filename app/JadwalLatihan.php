<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalLatihan extends Model
{
    protected $fillable = ['cabang_olahraga_id', 'tanggal_latihan'];

    public function jadwal()
    {
        return $this->belongsTo(CabangOlahraga::class, 'cabang_olahraga_id');
    }
}
