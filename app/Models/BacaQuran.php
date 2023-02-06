<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacaQuran extends Model
{
    use HasFactory;

    protected $table = 'baca_quran';
    protected $fillable = [
        'mhs_id', 'nama_pewawancara', 'tmp_seleksi', 'lks_seleksi', 'tesbacaan', 'nilaibacaan', 'tajwidbacaan', 'teshafalan', 'jmlhafalan', 'nilaihafalan', 'tajwidhafalan', 'kemampuanhafalan'
    ];

    public function mahasantri()
    {
        return $this->belongsTo(Mahasantri::class, 'mhs_id', 'id');
    }
    
    public function bacaquran()
    {
        return $this->belongsTo(Quran::class, 'tesbacaan', 'id');
    }
    
    public function hafalanquran()
    {
        return $this->belongsTo(Quran::class, 'teshafalan', 'id');
    }
}
