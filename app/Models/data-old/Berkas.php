<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'berkas';
    //mapping ke kolom
    protected $fillable = ['id','pengeriman','scanBerkas'];
    public function mahasantri()
    {
        return $this->hasOne(Mahasantri::class);
    }
    
}

