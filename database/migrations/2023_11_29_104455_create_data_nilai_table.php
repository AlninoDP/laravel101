<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataNilaiTable extends Migration
{
    public function up()
    {
        Schema::create('data_nilai', function (Blueprint $table) {
            $table->foreignId('nim')->constrained('data_mahasiswa')->onDelete('cascade');
            $table->foreignId('kode_matkul')->constrained('matakuliah')->onDelete('cascade');
            $table->float('nilai');
            $table->timestamps();
            $table->primary(['nim', 'kode_matkul']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_nilai');
    }
}
