<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articleRequest extends FormRequest
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
            'Name'=>'required',
            'Type'=>'required',
            'Brand'=>'required',
            'Description'=>'required',
            'Amount'=>'required|numeric',
            'Price_buy'=>'required|numeric',
            'Admission_date'=>'required',
            'Image'=>'required',
        ];
    }
}
