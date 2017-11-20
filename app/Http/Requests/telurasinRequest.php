<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telurasinRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'jumlahtelur' => 'required|numeric'
            
        ];
    }

    public function messages()
    {
        return [
            'jumlahtelur.required' => 'jumlah telur Tidak Boleh Kosong.',
            
            'jumlahtelur.numeric' => 'Masukkan data yang valid.'
            
            
            
        ];
    }
}
