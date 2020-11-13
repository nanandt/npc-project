<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPelatihsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pelatihs', function (Blueprint $table) {
            $table->id();
            $table->string('pelatih_id');
            $table->string('prestasi');
            $table->string('pertandingan_mengesankan');
            $table->string('pertandingan_mengecewakan');
            $table->string('lawan_tangguh');
            $table->string('rekan_berlatih');
            $table->string('hobi');
            $table->string('makanan_favorit');
            $table->string('cita_cita');
            $table->string('atlit_favorit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pelatihs');
    }
}
