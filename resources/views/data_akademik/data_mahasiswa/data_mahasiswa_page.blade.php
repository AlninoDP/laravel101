@extends('main_layout.main')

@section('header')
    <h1>Data Mahasiswa</h1>
@endsection

@section('body')


<style>
    table,
    th,
    td { 
        padding: 3px;
        text-align: center;
        border: 2px solid black;
    }

    td {
        font-size: 14px;
    }

    .crud-row {

    }
    
    
</style>


<h2 style="text-align: center">Data Mahasiswa</h2>
{{-- @if(session('success'))
<div class="alert alert-success">
   <p> {{ session('success') }}</p>
</div>
@endif --}}

<div class="d-flex justify-content-center mb-2">
   
     <table>
        <tr>
            <td> 
                <a href="/report/data_mahasiswa/create" class="icon-link mx-2 ">      
                    <img src="/images/add-person.png" alt="add-person" style="width: 1.7rem; height: 1.7rem;" >
                </a>
            </td>
            <td>
                <a href="/#" class="icon-link mx-2"> 
                    <img src="/images/update.png" alt="right-arrow" style="width: 1.5rem; height: 1.5rem;" >
                </a>
            </td>
            <td>
                <a href="/#" class="icon-link mx-2"> 
                    <img src="/images/delete.png" alt="right-arrow" style="width: 1.5rem; height: 1.5rem;" >
                </a>  
            </td>
        </tr>
     </table>    
</div>         

<table class="table mx-auto" style="text-align:center;width: 400px">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kota Asal</th>
    </tr>
    <tbody>
        @foreach ($data_mahasiswa as $data_mhs)
        <tr>
            <td> {{ $data_mhs->nim }}</td>
            <td>{{ $data_mhs->nama }}</td>
            <td>{{ $data_mhs->kota_asal }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection