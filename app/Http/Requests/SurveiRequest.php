<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveiRequest extends FormRequest
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
            'izinbeasiswa' => 'required', 
            'note_izinbeasiswa' => 'required', 
            'statuskel' => 'required', 
            'note_statuskel' => 'required', 
            'pendkel' => 'required', 
            'note_pendkel' => 'required', 
            'usiapend' => 'required', 
            'note_usiapend' => 'required', 
            'kesehatankel' => 'required', 
            'note_kesehatankel' => 'required', 
            'jenispekrj' => 'required', 
            'note_jenispekrj' => 'required', 
            'statusrmh' => 'required', 
            'note_statusrmh' => 'required', 
            'luasrmh' => 'required', 
            'note_luasrmh' => 'required', 
            'dindingrmh' => 'required', 
            'note_dindingrmh' => 'required', 
            'ataprmh' => 'required', 
            'note_ataprmh' => 'required', 
            'lantairmh' => 'required', 
            'note_lantairmh' => 'required', 
            'alatmsk' => 'required', 
            'note_alatmsk' => 'required', 
            'perabotan' => 'required', 
            'note_perabotan' => 'required', 
            'sumberair' => 'required', 
            'note_sumberair' => 'required', 
            'mck' => 'required', 
            'note_mck' => 'required', 
            'penerangan' => 'required', 
            'note_penerangan' => 'required', 
            'lokasirmh' => 'required', 
            'note_lokasirmh' => 'required', 
            'tataletak' => 'required', 
            'note_tataletak' => 'required', 
            'miliktanah' => 'required', 
            'note_miliktanah' => 'required', 
            'harta' => 'required', 
            'note_harta' => 'required'
        ];
    }
}
