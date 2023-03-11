<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
//            'full_name' => 'required',
//            'gender' => 'required',
//            'dob' => 'required',
//            'mobile' => 'required',
//            'joining_date' => 'required',
//            'qualification' => 'required',
//            'experience' => 'required',
//            'salary' => 'required',
//            'security_type' => 'required',
//            'security_fee' => 'required',
//            'image' => 'required',
//            'address' => 'required',
//            'city' => 'required',
//            'state' => 'required',
//            'zipcode' => 'required',
//            'country' => 'required'
        ];
    }
}
