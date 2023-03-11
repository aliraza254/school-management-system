<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
//        dd('i am here');
        return [
//            'first_name'=> 'required',
//            'last_name'=> 'required',
//            'class'=> 'required',
//            'fee_discount'=> 'required',
//            'std_id'=> 'required',
//            'gender'=> 'required',
//            'dob'=> 'required',
//            'joining_date'=> 'required',
//            'religion'=> 'required',
//            'father_name'=> 'required',
//            'father_occupation'=> 'required',
//            'father_mobile'=> 'required',
//            'father_cnic'=> 'required',
//            'mother_name'=> 'required',
//            'mother_occupation'=> 'required',
//            'mother_mobile_number'=> 'required',
//            'present_address'=> 'required',
//            'permanent_address'=> 'required'
        ];
    }
}
