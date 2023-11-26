<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNilai extends Model
{
    use HasFactory;
    protected $table = 'data_nilai';
    protected $fillable = ['nim', 'kode_matkul', 'nilai'];

    public function mahasiswa()
    {
        return $this->belongsTo(DataMahasiswa::class, 'nim', 'nim');
    }

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'kode_matkul', 'kode_matkul');
    }
}
