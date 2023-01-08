<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasantri extends Model
{
    
    //mapping ke tabel
    protected $table = 'mahasantri';
    protected $primaryKey = 'id';
    //mapping ke kolom
    protected $fillable = ['id',',nama','tmp_lahir','tgl_lahir','anak','no_hp','email','alamat'];
    //relasi tabel one to one ke tabel pendidikan
    // public function pendidikan()
    // {
    //     return $this->hasOne(Pendidikan::class);
    // }

    //merujuk ke tabel mahasantri, jadi data pendidikan di tampilkan ke mahasantri 
    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function informasi()
    {
        return $this->belongsTo(Informasi::class);
    }

    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }

    public function berkas()
    {
        return $this->belongsTo(Berkas::class);
    }

   
    
}
