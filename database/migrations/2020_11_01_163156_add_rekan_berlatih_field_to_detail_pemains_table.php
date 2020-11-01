<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRekanBerlatihFieldToDetailPemainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pemains', function (Blueprint $table) {
            $table->string('rekan_berlatih');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_pemains', function (Blueprint $table) {
            $table->dropColumn('rekan_berlatih');
        });
    }
}
