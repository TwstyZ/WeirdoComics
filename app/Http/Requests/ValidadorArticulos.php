<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorArticulos extends FormRequest
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
            'txtTipo'=>'required',
            'txtMarca'=>'required',
            'txtDescripcion'=>'required',
            'txtCantidad'=>'required',
            'txtPrecioC'=>'required',
            'txtPrecioV'=>'required',
            'txtFecha'=>'required|date'
        ];
    }
}
