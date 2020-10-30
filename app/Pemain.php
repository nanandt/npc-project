<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemain extends Model
{
    use SoftDeletes;

    protected $fillable = ['cabang_olahraga_id', 'nama_pemain', 'thumbnail', 'prestasi'];

    protected $primaryKey = 'pemain_id';

    public function cabang_olahraga()
    {
        return $this->belongsTo(CabangOlahraga::class, 'cabang_olahraga_id');
    }
    public function detail_pemain()
    {
        return $this->hasMany(DetailPemain::class, 'pemain_id');
    }
}
