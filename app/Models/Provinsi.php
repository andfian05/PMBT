<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Provinsi extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'provinsi';
    protected $fillable = [
        'id_prov', 'nama'
    ];

    public function kabupaten()
    {
        return $this->hasOne(Kabupaten::class, 'prov_id');
    }

    public $sortable = [
        'id_prov', 'nama'
    ];

}
