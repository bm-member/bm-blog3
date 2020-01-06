<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:3|string|max:100',
            'content' => 'required'
        ];
    }

    public function messages() 
    {
        return [
            'title.required' => 'ခေါင်းစဥ်ထည့်ရန်လိုအပ်သည်။',
            'title.min' => 'ခေါင်းစဥ် အနည်းဆံုး ၃ လံုးထည့်ပါ။'
        ];
    }
}
