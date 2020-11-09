<?php

namespace App;

use App\CabangOlahraga;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['cabang_olahraga_id', 'video'];

    public function pidio()
    {
        return $this->belongsTo(CabangOlahraga::class, 'cabang_olahraga_id');
    }
}
