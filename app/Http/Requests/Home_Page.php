<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Home_Page extends FormRequest
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
            'name'=>'required|max:15',
             'phone'=>'required|size:10|numeric',
             'email'=>'required|email',
             'massege'=>'required|min:15|max:50'
        ];
    }
}
