<?php

use App\Pemain;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pemains = collect([
            'Kepin Catur',
            'Rizky Catur',
            'Surya Catur',
            'Kempet Catur',
            'Slamet Catur',
            'Wayu Catur',
            'Udin Catur',
            'Bambang',
            'Eka Rahayu',
            'Eka Puji',
            'Eka Putri',
            'Eka Putra kedua',
            'Eka Putra ketiga',
            'Eka Putge',
        ]);
        $pemains->each(function($pemain){
            Pemain::create([
            'nama_pemain' => $pemain,
            'cabang_olahraga_id' => mt_rand(2, 10),
            'thumbnail' => null,
            ]);
        });
    }
}
