<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasantriRequest extends FormRequest
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
            'nama' => 'required', 
            'anak_ke' => 'required', 
            'tmp_lahir' => 'required', 
            'tgl_lahir' => 'required', 
            'no_hp' => 'required', 
            'email' => 'required', 
            'alamat' => 'required', 
            'prov_id' => 'required', 
            'kab_id' => 'required', 
            'kec_id' => 'required', 
            'desa_id' => 'required', 
            'nama_ayah' => 'required', 
            'pkj_ayah' => 'required', 
            'pdk_ayah' => 'required', 
            'nama_ibu' => 'required', 
            'pkj_ibu' => 'required', 
            'pdk_ibu' => 'required', 
            'jml_sdr' => 'required', 
            'nohp_klg' => 'required', 
            'skl_asal' => 'required', 
            'jurusan_skl' => 'required', 
            'thn_lulus' => 'required', 
            'cita_cita' => 'required', 
            'prestasi' => 'required', 
            'penyakit' => 'required', 
            'perokok' => 'required', 
            'jurusan_id' => 'required', 
            'alasan' => 'required', 
            'media_id' => 'required', 
            'metode_berkas' => 'required', 
            'berkas' => 'nullable',
            'ket_profile' => 'required',
        ];
    }
}
