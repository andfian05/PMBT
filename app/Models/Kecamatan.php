<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $fillable = [
        'id_kec', 'kab_id', 'nama'
    ];

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kab_id', 'id_kab');
    }

    public function desa()
    {
        return $this->hasOne(Desa::class, 'kec_id');
    }
}
