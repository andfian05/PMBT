<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsi';
    protected $fillable = [
        'id_prov', 'nama'
    ];

    public function kabupaten()
    {
        return $this->hasOne(Kabupaten::class, 'prov_id');
    }

}
