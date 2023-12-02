<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(){
    $matakuliahObj = MataKuliah::all();
    return $matakuliahObj;

    }
}
