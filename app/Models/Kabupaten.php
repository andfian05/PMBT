<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;

    protected $table = 'kabupaten';
    protected $fillable = [
        'id_kab', 'prov_id', 'nama'
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'prov_id', 'id_prov');
    }

    public function kecamatan()
    {
        return $this->hasOne(Kecamatan::class, 'kab_id');
    }

}
