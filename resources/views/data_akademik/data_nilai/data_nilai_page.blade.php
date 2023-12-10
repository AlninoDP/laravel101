@extends('main_layout.main')

@section('header')
    <h1>Data Nilai</h1>
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

        <a href="/report/data_nilai">Detail</a>
        <a href="/report/data_nilai/create">Tambah</a>
        <table class="table mx-auto" style="text-align:center;width: 50%">
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
                @foreach($data_nilai as $nilai_data)
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

@endsection