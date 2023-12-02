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
        <h2>Data Nilai</h2>
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
                @foreach($dataNilai as $nilai_data)
                <tr>
                    <td>{{ $nilai_data->nim }}</td>
                    <td>{{ $nilai_data->mahasiswa->nama }}</td>
                    <td>{{ $nilai_data->kode_matkul }}</td>
                    <td>{{ $nilai_data->matakuliah->nama_matkul }}</td>
                    <td style="font-weight: bold; color: {{ $nilai_data->nilai < 70 ? 'red' : 'black' }}">{{
                        $nilai_data->nilai }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col">
        <h2>Data Mahasiswa</h2>
        <table style="text-align: center">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Kota Asal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataMahasiswa as $data_mhs)
                <tr>
                    <td> {{ $data_mhs->nim }}</td>
                    <td>{{ $data_mhs->nama }}</td>
                    <td>{{ $data_mhs->kota_asal }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col mt-3">
        <h2> Matakuliah</h2>
        <table style="text-align: center">
            <thead>
                <tr>
                    <th>Kode Matkul</th>
                    <th>Nama Matkul</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliah as $matkul)
                <tr>
                    <td>{{ $matkul->kode_matkul }}</td>
                    <td>{{ $matkul->nama_matkul }}</td>
                    <td>{{ $matkul->semester }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection