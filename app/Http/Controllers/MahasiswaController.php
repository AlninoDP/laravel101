<?php

namespace App\Http\Controllers;

use App\Models\DataNilai;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index () {
        $mhsObj = DataMahasiswa::all();
        $title = 'Data Mahasiswa';

        // TODO MAKE RETURN VIEW DATA MAHASISWA
        // return view('/data_mhs_page', compact('mhsObj','title'));
    }
}
