<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Kyslik\ColumnSortable\Sortable;

class Quran extends Model
{
    use HasFactory;
    // use Sortable;

    protected $table = 'quran';
    protected $fillable = [
        'surah'
    ];

    // public $sortable = [
    //     'surah'
    // ];
}
