<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'provinsi';
    //mapping ke kolom
    protected $fillable = ['id',',namaProvinsi'];
    public function mahasantri()
    {
        return $this->hasOne(Mahasantri::class);
    }
    
}
