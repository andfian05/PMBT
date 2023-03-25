<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Survei extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'survei';
    protected $fillable = [
        'mhs_id', 'nama_pewawancara', 'tmp_seleksi', 'lks_seleksi', 'sktm', 'note_sktm', 'progbeasiswa', 'note_progbea', 'izinbeasiswa', 'note_izinbeasiswa', 'statuskel', 'note_statuskel', 'pendkel', 'note_pendkel', 'usiapend', 'note_usiapend', 'kesehatankel', 'note_kesehatankel', 'jenispekrj', 'note_jenispekrj', 'statusrmh', 'note_statusrmh', 'luasrmh', 'note_luasrmh', 'dindingrmh', 'note_dindingrmh', 'ataprmh', 'note_ataprmh', 'lantairmh', 'note_lantairmh', 'alatmsk', 'note_alatmsk', 'perabotan', 'note_perabotan', 'sumberair', 'note_sumberair', 'mck', 'note_mck', 'penerangan', 'note_penerangan', 'lokasirmh', 'note_lokasirmh', 'tataletak', 'note_tataletak', 'miliktanah', 'note_miliktanah', 'harta', 'note_harta'
    ];

    public function mahasantri()
    {
        return $this->belongsTo(Mahasantri::class, 'mhs_id', 'id');
    }

    public $sortable = [
        'mhs_id', 'nama_pewawancara', 'tmp_seleksi', 'lks_seleksi', 'sktm', 'note_sktm', 'progbeasiswa', 'note_progbea', 'izinbeasiswa', 'note_izinbeasiswa', 'statuskel', 'note_statuskel', 'pendkel', 'note_pendkel', 'usiapend', 'note_usiapend', 'kesehatankel', 'note_kesehatankel', 'jenispekrj', 'note_jenispekrj', 'statusrmh', 'note_statusrmh', 'luasrmh', 'note_luasrmh', 'dindingrmh', 'note_dindingrmh', 'ataprmh', 'note_ataprmh', 'lantairmh', 'note_lantairmh', 'alatmsk', 'note_alatmsk', 'perabotan', 'note_perabotan', 'sumberair', 'note_sumberair', 'mck', 'note_mck', 'penerangan', 'note_penerangan', 'lokasirmh', 'note_lokasirmh', 'tataletak', 'note_tataletak', 'miliktanah', 'note_miliktanah', 'harta', 'note_harta'
    ];
}
