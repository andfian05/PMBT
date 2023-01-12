<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
     //mapping ke tabel
    protected $table = 'pendidikan';
     //mapping ke kolom
    protected $fillable = ['id','n_sekolah','jurusan','thn_lulus','citaCita','prestasi','penyakit','perokok'];
    public function mahasantri()
    {
        return $this->hasOne(Mahasantri::class);
    }
}
