<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

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
        return redirect('/report/data_mahasiswa')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }
 
    public function show(DataMahasiswa $data_mahasiswa)
    { 
        // dd($data_mahasiswa); 
        $title = "$data_mahasiswa->nim | $data_mahasiswa->nama "  ;
        return view('/data_akademik/data_mahasiswa/show_data_mahasiswa', ['dataMhs' => $data_mahasiswa, 'title' => $title]);
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
    public function destroy(DataMahasiswa $data_mahasiswa)
    {
        try {
            // Attempt to delete the record
            DB::table('data_mahasiswa')->where('nim', $data_mahasiswa)->delete();

            // Additional logic if the deletion is successful
                $data_mahasiswa->delete();
              return redirect('/report/data_mahasiswa');
        } catch (QueryException $e) {
            // Check if the exception is due to a foreign key constraint violation
            if ($e->errorInfo[1] == 1451) {
                // Handle the foreign key constraint violation
                return redirect()->back()->withErrors(['error' => 'Cannot delete the record due to foreign key constraint']);
            } else {
                // Handle other database exceptions
                return redirect()->back()->withErrors(['error' => 'An error occurred while deleting the record']);
              
            }
        }



        // $data_mahasiswa->delete();
        // return redirect('/report/data_mahasiswa');
    }
}
