<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'informasi';
    //mapping ke kolom
    protected $fillable = ['id','mediaInformasi'];
    public function mahasantri()
    {
        return $this->hasOne(Mahasantri::class);
    }
    
}
