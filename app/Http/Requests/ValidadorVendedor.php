<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorVendedor extends FormRequest
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
            'txtNombre'=>'required',
            'txtDireccion'=>'required',
            'noFijo'=>'required|min:8|max:20',
            'noCelular'=>'required|min:8|max:20',
            'txtCorreo'=>'required',
        ];
    }
}
