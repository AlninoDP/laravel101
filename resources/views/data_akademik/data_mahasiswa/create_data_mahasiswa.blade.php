@extends('data_akademik.crud_layout.crud_layout')


@section('header')
<div class="text-center">
    <h2>Tambah Mahasiswa</h2>
</div>

@endsection

@section('body')
<form method="post" action='/report/data_mahasiswa'>
    @csrf
    <div class="form-group row">
        <label for="nim" class="col-sm-2 col-form-label">NIM:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nim" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="kota_asal" class="col-sm-2 col-form-label">Kota Asal:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="kota_asal" required>
        </div>
    </div>

    <div class="form-group row ">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
        </div>
    </div>
</form>
@endsection