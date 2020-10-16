<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemains', function (Blueprint $table) {
            $table->bigIncrements('pemain_id');
            $table->string('nama_pemain');
            $table->string('thumbnail')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('cabang_olahraga_id');
            $table->foreign('cabang_olahraga_id')->references('cabang_olahraga_id')->on('cabang_olahragas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemains');
    }
}
