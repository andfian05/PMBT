<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'jurusan';
    //mapping ke kolom
    protected $fillable = ['id','namaJurusan'];
    public function mahasantri()
    {
        return $this->hasOne(Mahasantri::class);
    }
}
