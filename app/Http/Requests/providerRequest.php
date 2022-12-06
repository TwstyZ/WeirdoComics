<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class providerRequest extends FormRequest
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
            "Name"=>'required',
            "Address"=>'required',
            "Country"=>'required',
            "Contact"=>'required',
            "Cellphone"=>'required|numeric|min_digits:10',
            "Telephone"=>'required|numeric|min_digits:10',
            "Email"=>'required|email',
            "Image"=>'required',
        ];
    }
}
