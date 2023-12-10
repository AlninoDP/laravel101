@extends('main_layout.main')

@section('header')
    <h1>Data Matakuliah</h1>
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

<a href="/report/matakuliah/create">Tambah</a>
        <table class="table mx-auto"  style="text-align: center;width: 50%">
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

@endsection