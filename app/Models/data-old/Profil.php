<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'profil';
    //mapping ke kolom
    protected $fillable = ['id','pengetahuanprofil'];
    public function mahasantri()
    {
        return $this->hasOne(Mahasantri::class);
    }
    
}

