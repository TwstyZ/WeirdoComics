<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class itemRequest extends FormRequest
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
            'Edition'=>'required',
            'Brand'=>'required',
            'Amount'=>'required',
            'Price_buy'=>'required',
            'Admission_date'=>'required',
            'Image'=>'required',
            'Id'=>'required',
        ];
    }
}
