<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'bookname' => "required|regex: /[a-zA-Z]/",
            'authorname' => "required|regex: /[a-zA-Z]/",
            'bookcopy' => "required|numeric"
        ];
    }
}
