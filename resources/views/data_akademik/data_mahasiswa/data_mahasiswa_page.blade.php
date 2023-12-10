@extends('main_layout.main')

@section('header')
    <h1>Data Mahasiswa</h1>
@endsection

@section('body')


<style>
    table,
    th,
    td {
        border: 2px solid black;
    }

    td {
        font-size: 14px;
    }
</style>


<h2 style="text-align: center">Data Mahasiswa</h2>
<a href="/report/data_mhs/create">Tambah</a>
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