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
        $title = 'Tambah Mahasiswa';
        return view('/data_akademik/data_mahasiswa/create_data_mahasiswa', ['title' => $title]);
    }

    
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nim' => 'required|max:11',
            'nama' => 'required|max:100',
            'kota_asal' => 'required', 
        ]);
        DataMahasiswa::create($validasi);
        return redirect('/report/data_mahasiswa')->with('succes', 'Data Mahasiswa Berhasil Ditambahkan');
    }
 
    public function show($id)
    {
        
        $data_mahasiswa = DataMahasiswa::find($id);
        $title = "$data_mahasiswa->nim | $data_mahasiswa->nama "  ;
        return view('/data_akademik/data_mahasiswa/show_data_mahasiswa', ['data_mahasiswa' => $data_mahasiswa, 'title' => $title]);
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
