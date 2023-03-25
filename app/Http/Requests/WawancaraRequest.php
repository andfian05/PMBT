<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WawancaraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'mhs_id' => 'required|integer', 
            'nama_pewawancara' => 'required', 
            'tmp_seleksi' => 'required', 
            'lks_seleksi' => 'required', 
            'visimisi' => 'required', 
            'note_visimisi' => 'required', 
            'komitmen' => 'required', 
            'note_komitmen' => 'required', 
            'tanggungjawab' => 'required', 
            'note_tanggungjwb' => 'required', 
            'kejujuran' => 'required', 
            'note_kejujuran' => 'required', 
            'pekerjakeras' => 'required', 
            'note_pekerjakrs' => 'required', 
            'bekerjasama' => 'required', 
            'note_bekerjasama' => 'required', 
            'kemandirian' => 'required', 
            'note_kemandirian' => 'required', 
            'tolongmenolong' => 'required', 
            'note_menolong' => 'required', 
            'peduli' => 'required', 
            'note_peduli' => 'required', 
            'pembelajar' => 'required', 
            'note_pembelajar' => 'required', 
            'menghargaiprestasi' => 'required', 
            'note_hargaipres' => 'required', 
            'percayadiri' => 'required', 
            'note_pd' => 'required', 
            'demokratis' => 'required', 
            'note_demokratis' => 'required', 
            'disiplinwaktu' => 'required', 
            'note_disiplinwkt' => 'required', 
            'menjaganamabaik' => 'required', 
            'note_jaganmbaik' => 'required', 
            'salam' => 'required', 
            'note_salam' => 'required', 
            'motivasi' => 'required', 
            'note_motivasi' => 'required', 
            'brgpolutan' => 'required', 
            'note_brgpolutan' => 'required', 
            'brgharam' => 'required', 
            'note_brgharam' => 'required', 
            'riwayatpenyakit' => 'required', 
            'note_rytpenyakit' => 'required', 
            'ceritasingkat' => 'required', 
            'note_crtsingkat' => 'required', 
            'medkom' => 'required', 
            'note_medkom' => 'required',
        ];
    }
}
