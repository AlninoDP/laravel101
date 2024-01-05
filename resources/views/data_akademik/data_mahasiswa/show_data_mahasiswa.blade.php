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

    .crud-row {}
</style>


<h2 style="text-align: center">Data Mahasiswa</h2>
{{-- @if(session('success'))
<div class="alert alert-success">
    <p> {{ session('success') }}</p>
</div>
@endif --}}

{{-- CRUD BUTTON --}}
<div class="d-flex justify-content-center mb-2">
    <table>
        <tr>
            <td>
                <a href="/report/data_mahasiswa" class="icon-link mx-2">
                    <img src="/images/back.png" alt="back" style="width: 1.7rem; height: 1.7rem;">
                </a>
            </td>
        </tr>
    </table>
</div>

{{-- Data Table --}}
<table class=" mx-auto " style="text-align:center;width: 500px">
    <thead class="thead-dark">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kota Asal</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td> {{ $dataMhs->nim }}</td>
            <td>{{ $dataMhs->nama }}</td>
            <td>{{ $dataMhs->kota_asal }}</td>

        </tr>

    </tbody>
</table>
@endsection