<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DOV_Mail extends FormRequest
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
             'title'=>'required|min:5|max:20',
             'mytextarea'=>'required|min:20|max:120'
        ];
    }
}
