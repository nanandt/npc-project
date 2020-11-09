<?php

namespace App;

use App\CabangOlahraga;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['cabang_olahraga_id', 'foto', 'video'];


    public function cabor()
    {
        return $this->belongsTo(CabangOlahraga::class, 'cabang_olahraga_id');
    }
}
