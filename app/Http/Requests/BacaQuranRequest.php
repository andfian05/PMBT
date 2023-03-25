<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BacaQuranRequest extends FormRequest
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
            'tesbacaan' => 'required', 
            'nilaibacaan' => 'required', 
            'tajwidbacaan' => 'required', 
            'teshafalan' => 'required', 
            'jmlhafalan' => 'required', 
            'nilaihafalan' => 'required', 
            'tajwidhafalan' => 'required', 
            'kemampuanhafalan' => 'required'
        ];
    }
}
