<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Add_Institution extends FormRequest
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
            'Institution_name'=>'required|min:5',
            'Institution_type'=>'required',
            'Governrate'=>'required',
            'Password'=>'required|
               min:6|
               regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|
               confirmed',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
