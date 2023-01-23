<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasantri extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'tb_mahasantri';
    protected $primaryKey = 'mahasantri_id';
    protected $fillable = ['nama', 'tmp_lahir', 'tgl_lahir', 'anak', 'no_hp', 'email', 'alamat'];
    
}
