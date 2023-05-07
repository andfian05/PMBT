<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerhitunganRequest extends FormRequest
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
            'mhs_id' => 'required', 
            // 'nilai_berkas' => 'required', 
            // 'note_berkas' => 'required', 
            'nilai_survei' => 'required', 
            'note_survei' => 'required', 
            'nilai_wawancara' => 'required', 
            'note_wawancara' => 'required', 
            'nilai_quran' => 'required', 
            'note_quran' => 'required', 
            'nilai_akademik' => 'required', 
            'note_akademik' => 'required'
        ];
    }
}
