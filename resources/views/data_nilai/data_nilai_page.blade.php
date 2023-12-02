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
        <h2>Test</h2>
        <label for="txtNim">Masukan Nim:</label>
        <input type="text" name="nim" id="txtNim">
        <input type="submit" value="Cari">
    </div>
</div>
@endsection