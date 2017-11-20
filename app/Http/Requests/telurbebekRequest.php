<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telurbebekRequest extends FormRequest
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
            'jumlahbebek' => 'required|numeric|min:1',
            'harga' => 'required|numeric|min:0'
            
        ];
    }

    public function messages()
    {
        return [
            'jumlahbebek.required' => 'Umur Padi Tidak Boleh Kosong.',
            'harga.required' => 'Luas Lahan Tidak Boleh Kosong.',
            'jumlahbebek.numeric' => 'Masukkan data yang valid',
            'harga.numeric' => 'Masukkan data yang valid',
            'jumlahbebek.min' => 'Masukkan data yang valid',
            'harga.min' => 'Masukkan data yang valid'
        
            
        ];
    }
}
