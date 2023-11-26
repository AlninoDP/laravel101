<?php

namespace App\Http\Controllers;

use App\Models\DataNilai;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function showDataMhs () {
        $mahasiswas = DataMahasiswa::all();
        $nilais = DataNilai::all();
        $matakuliahs = MataKuliah::all();
        $title = 'Data Mahasiswa';

        return view('/data_mhs', compact('mahasiswas', 'nilais', 'matakuliahs','title'));
    }
}
