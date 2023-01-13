<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil';
    protected $fillable = [
        'keterangan'
    ];

    public function mahasantri()
    {
        return $this->hasOne(Mahasantri::class, 'profil_id');
    }
}
