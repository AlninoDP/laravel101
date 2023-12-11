<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('data_mahasiswa', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('nama');
            $table->string('kota_asal');
            // Add other columns if needed

             
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_mahasiswa');
    }
}

