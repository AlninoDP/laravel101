<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use Illuminate\Http\Request;

class DataMhsController extends Controller
{
    
    public function index()
    {
        $data_mhs = DataMahasiswa::all(); 
        return $data_mhs;
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
