<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaInformasi extends Model
{
    use HasFactory;

    protected $table = 'mediainformasi';
    protected $fillable = [
        'id_media', 'media_informasi'
    ];
}
