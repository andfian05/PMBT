<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasantri extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'mahasantri';
    //mapping ke kolom
    protected $fillable = ['nama','tmp_lahir','tgl_lahir','anak','no_hp','email','alamat'];
    
}
