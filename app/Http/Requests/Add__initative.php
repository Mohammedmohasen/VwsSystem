<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Add__initative extends FormRequest
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
             'Initative_name'=>'required | min:3',
             'select_prov'=>'required',
             'Initative_Address'=>'required | min:5',
             'Initative_details'=>'required | min:15 | max:120',
              'Initative_hours_number'=>'required',
            ];
    }
}
