<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelatih extends Model
{
    use SoftDeletes;

    protected $fillable = ['cabang_olahraga_id', 'nama_pelatih','thumbnail'];

    protected $primaryKey = 'pelatih_id';

    public function cabang_olahraga()
    {
        return $this->belongsTo(CabangOlahraga::class, 'cabang_olahraga_id');
    }
}
