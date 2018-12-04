<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class memberValidate extends FormRequest
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
          'job_id'=>'required',
          'fname'=>'required',
          'mname'=>'required',
          'lname'=>'required',
          'date_hired'=>'required',
          'date_birth'=>'required',
          'contact_number'=>'required',
          'address'=>'required',
        ];
    }
}
