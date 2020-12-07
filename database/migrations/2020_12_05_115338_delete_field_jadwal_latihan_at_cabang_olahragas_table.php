<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFieldJadwalLatihanAtCabangOlahragasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cabang_olahragas', function (Blueprint $table) {
            $table->dropColumn('jadwal_latihan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cabang_olahragas', function (Blueprint $table) {
            $table->date('jadwal_latihan')->nullable();
        });
    }
}
