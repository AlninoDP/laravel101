<?php

namespace App\Http\Controllers;

use App\Models\DataNilai;
use Illuminate\Http\Request;

class DataNilaiController extends Controller
{
     
    public function index()
    {
        $title = 'Data Nilai';
        $data_nilai = DataNilai::all();
        return view('/data_akademik/data_nilai/data_nilai_page', ['title' => $title,'data_nilai'=> $data_nilai]); 
    }

     
    public function create()
    {
        return view('/data_akademik/data_nilai/create_data_nilai');
    }

     
    public function store(Request $request)
    {
        //
    }

     
    public function show($id)
    {
        //
    }

     
    public function edit($id)
    {
        //
    }

     
    public function update(Request $request, $id)
    {
        //
    }

     
    public function destroy($id)
    {
        //
    }
}
