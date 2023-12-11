<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'data_mahasiswa'; /// To specify what table assosciated with the model
    protected $primaryKey = 'nim'; /// set the primary key to nim
    public $incrementing = false; /// set the primary key incrementing or not
    /// If primary key is not an auto-incrementing integer (for example, a string), set to false

    protected $fillable = ['nim','nama','kota_asal']; /// is an array that defines which attributes can be mass-assigned


    public function nilai (){
        /// hasMany() method used to define 1toM relationship between table
        /// in this case data_mahasiswa.nim is primary key to data_nilai.nim 
        return $this->hasMany(DataNilai::class, 'nim', 'nim'); 
    }
}
