<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PotensiAkademik extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'potensi_akademik';
    protected $fillable = [
        'mhs_id', 'b_inggris', 'komputer', 'aritmatika', 'mekanikal', 'simbol'
    ];

    public function mahasantri()
    {
        return $this->belongsTo(Mahasantri::class, 'mhs_id', 'id');
    }
    

    public $sortable = [
        'mhs_id', 'b_inggris', 'komputer', 'aritmatika', 'mekanikal', 'simbol'
    ];
}
