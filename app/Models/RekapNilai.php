<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapNilai extends Model
{
  
    use HasFactory;
     //mapping ke tabel
    protected $table = 'rekapnilai';
     //mapping ke kolom
    protected $fillable = ['id','nilaisurvei','nilaitanyajawab','nilaitotal','DataSeleksi_idDataSeleksi'];

    // public function rekapnilai()
    // {
    //     return $this->hasMany(RekapNilai::class);
    // }

    // public function dataseleksi()
    // {
    //     return $this->hasMany(DataSeleksi::class);
    // }
}
