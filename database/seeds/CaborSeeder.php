<?php

use App\CabangOlahraga;
use Illuminate\Database\Seeder;

class CaborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cabors = collect([
            'ALETIK',
            'CATUR',
            'BULU TANGKIS',
            'TENIS MEJA',
            'RENANG',
            'PANAHAN',
            'JUDO',
            'MENEMBAK',
            'GOALBALL',
            'TENIS LAPANG',
            'VOLI DUDUK',
            'BALAP SEPEDA',
            'ANGKAT BERAT'
        ]);

            $cabors->each(function($cabor){
                CabangOlahraga::create([
                    'nama_cabor' => $cabor
                ]);
            });
    }
}
