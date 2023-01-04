<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasantri extends Model
{
    
    //mapping ke tabel
    protected $table = 'mahasantri';
    //mapping ke kolom
    protected $fillable = ['id', 'nama', 'tmp_lahir', 'tgl_lahir', 'anak', 'no_hp', 'email', 'alamat', 'pendidikan_id', 'keluarga_id', 'jurusan_id', 'informasi_id', 'provinsi_id', 'profil_id', 'berkas_id'];
    //relasi tabel one to one ke tabel pendidikan
    // public function pendidikan()
    // {
    //     return $this->hasOne(Pendidikan::class);
    // }

    //merujuk ke tabel mahasantri, jadi data pendidikan di tampilkan ke mahasantri 
    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan_id', 'id');
    }

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'keluarga_id', 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'id');
    }

    public function informasi()
    {
        return $this->belongsTo(Informasi::class, 'informasi_id', 'id');
    }

    public function profil()
    {
        return $this->belongsTo(Profil::class, 'profil_id', 'id');
    }

    public function berkas()
    {
        return $this->belongsTo(Berkas::class, 'berkas_id', 'id');
    }
    
}
