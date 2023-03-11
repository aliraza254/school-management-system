<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'first_name'=> 'required|string',
            'last_name'=> 'required|string',
            'class'=> 'required|string',
            'fee_discount'=> 'required|string',
            'std_id'=> 'required|string',
            'gender'=> 'required|string',
            'dob'=> 'required|string',
            'joining_date'=> 'required|string',
            'religion'=> 'required|string',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'father_name'=> 'required|string',
            'father_occupation'=> 'required|string',
            'father_mobile'=> 'required|string',
            'father_cnic'=> 'required|string',
            'mother_name'=> 'required|string',
            'mother_occupation'=> 'required|string',
            'mother_mobile_number'=> 'required|string',
            'present_address'=> 'required|string',
            'permanent_address'=> 'required|string'
        ];
    }
}
