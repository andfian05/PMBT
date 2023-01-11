<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasantri extends Model
{
    use HasFactory;

    protected $table = 'mahasantri';
    protected $fillable = [
        'nama', 'anak_ke', 'tmp_lahir', 'tgl_lahir', 'no_hp', 'email', 'alamat', 'prov_id', 'kab_id', 'kec_id', 'desa_id', 'nama_ayah', 'pkj_ayah', 'pdk_ayah', 'nama_ibu', 'pkj_ibu', 'pdk_ibu', 'jml_sdr', 'nohp_klg', 'skl_asal', 'jurusan_skl', 'thn_lulus', 'cita_cita', 'prestasi', 'penyakit', 'perokok', 'jurusan_id', 'alasan', 'media_id', 'metode_berkas', 'berkas'
    ];

    public function provinsi() 
    {
        return $this->belongsTo(Provinsi::class, 'prov_id', 'id_prov');
    }
    public function kabupaten() 
    {
        return $this->belongsTo(Kabupaten::class, 'kab_id', 'id_kab');
    }
    public function kecamatan() 
    {
        return $this->belongsTo(Kecamatan::class, 'kec_id', 'id_kec');
    }
    public function desa() 
    {
        return $this->belongsTo(Desa::class, 'desa_id', 'id_desa');
    }
    public function jurusan() 
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id_jurusan');
    }
    public function mediaInformasi() 
    {
        return $this->belongsTo(MediaInformasi::class, 'media_id', 'id_media');
    }

}
