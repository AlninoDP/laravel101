<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $primaryKey = 'kode_matkul';
    public $incrementing = false;

    protected $fillable = ['kode_matkul', 'nama_matkul', 'semester'];

    public function nilai()
    {
        return $this->hasMany(DataNilai::class, 'kode_matkul', 'kode_matkul');
    }
}
