<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
     
    public function index()
    {
       $title = 'Data Matakuliah';
       $matakuliah = MataKuliah::all();
       return view('/data_akademik/matakuliah/matakuliah_page', ['title'=>$title, 'matakuliah'=>$matakuliah]);
    }
 
    public function create()
    {
        return view('/data_akademik/matakuliah/create_data_matakuliah');
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
