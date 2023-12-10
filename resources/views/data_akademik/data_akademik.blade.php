@extends('main_layout.main')

@section('header')
<h1>Data Akademik</h1>
@endsection

@section('body')
<style>
    .feature-icon {
        width: 4rem;
        height: 4rem;
        border-radius: 0.75rem;
    }
</style>

{{-- Koleksi Data --}}
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Koleksi Data</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <img src="/images/mhs_icon.png" alt="mahasiswa" style="width: 3rem; height: 3rem;" >
        </div>
        <h3 class="fs-2 text-body-emphasis">Data Mahasiswa</h3>
        <p>Kumpulan biodata - biodata dari mahasiswa, termasuk didalamnya no induk mahasiswa, nama mahasiswa dan kota asal mahasiswa.</p>
        <a href="/report/data_mahasiswa" class="icon-link">
          Lihat Detail
          <img src="/images/chevron-right.png" alt="right-arrow" style="width: 1.5rem; height: 1.5rem;" >
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <img src="/images/matkul_icon.png" alt="matakuliah" style="width: 3rem; height: 3rem;" >
        </div>
        <h3 class="fs-2 text-body-emphasis">Data Matakuliah</h3>
        <p>Berisi kumpulan data dari matakuliah mahasiswa, termasuk didalamnya kode mata kuliah, nama mata kuliah, dan terdapat di semester berapa mata kuliah tersebut.</p>
        <a href="/report/matakuliah" class="icon-link">
          Lihat Detail
          <img src="/images/chevron-right.png" alt="right-arrow" style="width: 1.5rem; height: 1.5rem;" >
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <img src="/images/grade_icon.png" alt="matakuliah" style="width: 3rem; height: 3rem;" >
        </div>
        <h3 class="fs-2 text-body-emphasis">Data Nilai</h3>
        <p>Berisi data - data nilai mahasiswa, di dalamnya terdapat nama mahasiswa, nama matakuliah dan nilainya serta apakah nilainya diatas standar atau tidak.</p>
        <a href="/report/data_nilai" class="icon-link">
          Lihat Detail
          <img src="/images/chevron-right.png" alt="right-arrow" style="width: 1.5rem; height: 1.5rem;" >
        </a>
      </div>
    </div>
  </div>
  
@endsection