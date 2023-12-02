<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DataNilaiController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\DataMahasiswaController;

class MasterMhsController extends Controller
{
    public function index(){
        $title = 'Data Mahasiswa';

        $dataMahasiswaController = new DataMahasiswaController();
        $dataNilaiController = new DataNilaiController();
        $matakuliahController = new MatakuliahController();

        $dataMahasiswa = $dataMahasiswaController->index();
        $dataNilai = $dataNilaiController->index();
        $matakuliah = $matakuliahController->index();

        return view('data_mhs/data_mhs_page', compact('dataMahasiswa', 'dataNilai','matakuliah','title'));
        
    }
}
