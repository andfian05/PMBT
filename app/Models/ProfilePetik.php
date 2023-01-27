<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePetik extends Model
{
    use HasFactory;

    protected $table = 'profilepetik';
    protected $fillable = [
        'id', 'ket_profile'
    ];
}
