<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class employee_request extends FormRequest
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
            'username' => 'required|min:3',
            'password' => 'required',
            'employee_name' => 'required',
            'company_name' => 'required',
            'contact' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "can't left empty...."
        ];
    }
}
