@extends('main_layout.main')

@section('header')
<h1>Data Mahasiswa</h1>
@endsection

@section('style')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .alert {
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .d-flex {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
    }

    th,
    td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    th {
        background-color: #343a40;
        color: #fff;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .icon-link img {
        width: 1.5rem;
        height: 1.5rem;
    }

    .icon-link {
        margin: 0 5px;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .icon-link button {
        background: none;
        border: none;
        cursor: pointer;
        color: #007bff;
    }

    .icon-link button:hover {
        text-decoration: underline;
    }

    .aksi-btn {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }
</style>
@endsection

@section('body')
<h2>Data Mahasiswa</h2>

{{-- ALERT DIV --}}
@if($errors->any())
<div class="alert alert-danger">
    {{ $errors->first() }}
</div>
@endif

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

{{-- CRUD BUTTON --}}
<div class="d-flex">
    <a href="/report/data_mahasiswa/create" class="icon-link">
        <img src="/images/add-person.png" alt="add-person">
    </a>
</div>

{{-- Data Table --}}
<table>
    <thead>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kota Asal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_mahasiswa as $data_mhs)
        <tr>
            <td>{{ $data_mhs->nim }}</td>
            <td>{{ $data_mhs->nama }}</td>
            <td>{{ $data_mhs->kota_asal }}</td>
            <td class="icon-link">
                <div class="aksi-btn">
                    <a href="/report/data_mahasiswa/{{ $data_mhs->nim }}" class="icon-link">
                        <button type="submit">Show</button>
                    </a>
                    <a href="/report/data_mahasiswa/{{ $data_mhs->nim }}/edit">
                        <button type="submit">Edit</button>
                    </a>
                    <form method="POST" action="/report/data_mahasiswa/{{ $data_mhs->nim }}"
                        onsubmit="return confirmDelete()">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    function confirmDelete() {
            return confirm('Are you sure you want to delete this record?');
        }
</script>
@endsection