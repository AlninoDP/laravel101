<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataNilaiTable extends Migration
{
    public function up()
    {
        Schema::create('data_nilai', function (Blueprint $table) {
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('data_mahasiswa');
            $table->string('kode_matkul');
            $table->foreign('kode_matkul')->references('kode_matkul')->on('matakuliah');
            $table->integer('nilai'); 

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_nilai');
    }
}

