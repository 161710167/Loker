<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_lowongans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('pendidikan');
            $table->string('keahlian');
            $table->integer('telpon');
            $table->string('cv');
            $table->unsignedInteger('lowongan_id');
            $table->foreign('lowongan_id')->references('id')->on
            ('lowongans')->onDelete('cascade');       
           
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
        Schema::dropIfExists('daftar_lowongans');
    }
}
