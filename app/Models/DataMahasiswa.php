<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'data_mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;

    protected $fillable = ['nim','nama','kota_asal'];

    public function nilai (){
        return $this->hasMany(DataNilai::class, 'nim', 'nim');
    }
}
