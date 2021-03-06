<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Student_mail extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'title'=>'required',
            'mytextarea'=>'required|max:300'
        ];
    }
}
