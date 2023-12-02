<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use App\Http\Controllers\Controller;

class DataMahasiswaController extends Controller
{
    public function index () {
        $mhsObj = DataMahasiswa::all();
                return $mhsObj;
    }
}
