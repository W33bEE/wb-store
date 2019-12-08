<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersEditRequest extends FormRequest
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
            //
            'name'=>'required',
            'Last_name'=>'required',
            'First_name'=>'required',
            'email'=>'required',
            'role_id'=>'required',

        ];
    }
    public function messages(){
        return[
            'email.required'=>'Email is required!',
            'name.required'=>'Username is required!',
            'Last_name.required'=>'Last_name is required!',
            'First_name.required'=>'First_name is required!',
            'role_id.required'=>'Role is required!',
        ];

    }
}
