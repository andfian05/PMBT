<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSeleksi extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'dataseleksi';
    //mapping ke kolom
    protected $fillable = ['id','Diterima','Ditolak','Rekomendasi','NoHandphone'];
    
    // public function rekapnilai()
    // {
    //     return $this->belongsTo(RekapNilai::class);
    // }

    // public function dataseleksi()
    // {
    //     return $this->belongsTo(DataSeleksi::class);
    // }

}
