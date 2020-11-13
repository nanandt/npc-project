<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPemain extends Model
{
    protected $fillable = ['pemain_id', 'prestasi', 'pertandingan_mengesankan',
                            'pertandingan_mengesankan', 'pertandingan_mengecewakan', 'lawan_tangguh',
                            'rekan_berlatih', 'hobi', 'makanan_favorit', 'atlit_favorit', 'cita_cita'
                        ];
}
