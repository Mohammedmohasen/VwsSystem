<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Add_Admin extends FormRequest
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
        // in the passwored confirm field we can use the same passwored rules b this statment its work
        return [
            'username'=>'required',
             'password'=>'required|
               min:6|
               regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|
               confirmed',
        ];
    }
}
