<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Announcments extends FormRequest
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
            'announcment_select'=>'required',
            'title'=>'required|min:6',
            'date'=>'required',
            'content'=>'required|min:14|max:250'
        ];
    }
}
