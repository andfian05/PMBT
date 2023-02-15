<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perhitungan extends Model
{
    use HasFactory;

    protected $table = 'perhitungan';
    protected $fillable = [
        'mhs_id', 'nilai_berkas', 'note_berkas', 'nilai_survei', 'note_survei', 'nilai_wawancara', 'note_wawancara', 'nilai_quran', 'note_quran', 'nilai_akademik', 'note_akademik'
    ];

    public function mahasantri()
    {
        return $this->belongsTo(Mahasantri::class, 'mhs_id', 'id');
    }
}
