<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Wawancara extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'wawancara';
    protected $fillable = [
        'mhs_id', 'nama_pewawancara', 'tmp_seleksi', 'lks_seleksi', 'visimisi', 'note_visimisi', 'komitmen', 'note_komitmen', 'tanggungjawab', 'note_tanggungjwb', 'kejujuran', 'note_kejujuran', 'pekerjakeras', 'note_pekerjakrs', 'bekerjasama', 'note_bekerjasama', 'kemandirian', 'note_kemandirian', 'tolongmenolong', 'note_menolong', 'peduli', 'note_peduli', 'pembelajar', 'note_pembelajar', 'menghargaiprestasi', 'note_hargaipres', 'percayadiri', 'note_pd', 'demokratis', 'note_demokratis', 'disiplinwaktu', 'note_disiplinwkt', 'menjaganamabaik', 'note_jaganmbaik', 'salam', 'note_salam', 'motivasi', 'note_motivasi', 'brgpolutan', 'note_brgpolutan', 'brgharam', 'note_brgharam', 'riwayatpenyakit', 'note_rytpenyakit', 'ceritasingkat', 'note_crtsingkat', 'medkom', 'note_medkom'
    ];

    public function mahasantri()
    {
        return $this->belongsTo(Mahasantri::class, 'mhs_id', 'id');
    }

    public $sortable = [
        'mhs_id', 'nama_pewawancara', 'tmp_seleksi', 'lks_seleksi', 'visimisi', 'note_visimisi', 'komitmen', 'note_komitmen', 'tanggungjawab', 'note_tanggungjwb', 'kejujuran', 'note_kejujuran', 'pekerjakeras', 'note_pekerjakrs', 'bekerjasama', 'note_bekerjasama', 'kemandirian', 'note_kemandirian', 'tolongmenolong', 'note_menolong', 'peduli', 'note_peduli', 'pembelajar', 'note_pembelajar', 'menghargaiprestasi', 'note_hargaipres', 'percayadiri', 'note_pd', 'demokratis', 'note_demokratis', 'disiplinwaktu', 'note_disiplinwkt', 'menjaganamabaik', 'note_jaganmbaik', 'salam', 'note_salam', 'motivasi', 'note_motivasi', 'brgpolutan', 'note_brgpolutan', 'brgharam', 'note_brgharam', 'riwayatpenyakit', 'note_rytpenyakit', 'ceritasingkat', 'note_crtsingkat', 'medkom', 'note_medkom'
    ];
}
