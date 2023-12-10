<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use Illuminate\Http\Request;

class DataMhsController extends Controller
{
    
    public function index()
    {   
        $title = 'Data Mahasiswa';
        $data_mahasiswa = DataMahasiswa::all();
        return view('/data_akademik.data_mahasiswa.data_mahasiswa_page', ['title' => $title, 'data_mahasiswa'=> $data_mahasiswa]);
    }

     
    public function create()
    {
        return view('/data_akademik/data_mahasiswa/create_data_mahasiswa');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
