<?php

namespace App\Http\Controllers;

use App\Models\DataNilai;
use Illuminate\Http\Request;

class DataNilaiController extends Controller
{
    public function index () {
        $nilaiObj = DataNilai::all();

        return $nilaiObj;
    }

}
