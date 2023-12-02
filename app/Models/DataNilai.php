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
        /// belongsTo() method indicate that a particular model belongs to another model
        /// in this case data_mahasiswa.nim is primary key to data_nilai.nim 
        /// and data_nilai.nim belongsTo data_mahasiswa.nim
        return $this->belongsTo(DataMahasiswa::class, 'nim', 'nim');
    }

    public function matakuliah()
    {

        return $this->belongsTo(MataKuliah::class, 'kode_matkul', 'kode_matkul');
    }
}
