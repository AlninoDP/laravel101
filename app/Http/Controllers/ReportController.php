<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
     
    public function index()
    {
        $title = 'Data Akademik';
        $dataMhsController = new DataMhsController();
        $mataKuliahController = new MataKuliahController();
        $dataNilaiController = new DataNilaiController();
        $dataMhs = $dataMhsController->index();
        $mataKuliah = $mataKuliahController->index();
        $dataNilai = $dataNilaiController->index();


        return view('/data_akademik/data_akademik', ['title'=> $title, 'dataMhs'=> $dataMhs , 'mataKuliah' => $mataKuliah,'dataNilai' => $dataNilai]);
    }

    
    public function create()
    {
        // $dataMhsController = new DataMhsController();

        // $dataMhs = $dataMhsController->create();
        // return $dataMhs;
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
