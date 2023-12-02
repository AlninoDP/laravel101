@extends('main_layout.main')

@section('header')
<h1>Halaman Data Nilai Mahasiswa</h1>
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
<div class="row">
    <div class="col">
        <table style="text-align:center;">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama Mahasiswa</th>
                    <th>Kode Matkul</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nilaiObj as $dataNilai)
                <tr>
                    <td>{{ $dataNilai->nim }}</td>
                    <td>{{ $dataNilai->mahasiswa->nama }}</td>
                    <td>{{ $dataNilai->kode_matkul }}</td>
                    <td>{{ $dataNilai->matakuliah->nama_matkul }}</td>
                    <td style="font-weight: bold; color: {{ $dataNilai->nilai < 70 ? 'red' : 'black' }}">{{
                        $dataNilai->nilai }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col">
        <h2>Data Mahasiswa</h2>
        <thead>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kota Asal</th>
        </thead>
        <tbody>
            @foreach ($mhsObj as $$dataMhs)
            <tr>
                <td> {{ $dataMhs->nim }}</td>
                <td>{{ $dataMhs->nama }}</td>
                <td>{{ $dataMhs->kota_asal }}</td>
            </tr>
            @endforeach

        </tbody>


    </div>
</div>
@endsection