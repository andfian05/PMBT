<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'keluarga';
    //mapping ke kolom
    protected $fillable = ['id','namaAyah','namaIbu','pkjAyah','pkjIbu','pdkAyah','pdkIbu','jml_saudara','hpKeluarga'];
    public function mahasantri()
    {
        return $this->hasOne(Mahasantri::class);
    }
    
}
