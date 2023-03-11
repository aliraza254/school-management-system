<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Fees;
use App\Models\StudentAttendance;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'class',
        'fee_discount',
        'std_id',
        'admission_number',
        'gender',
        'dob',
        'joining_date',
        'religion',
        'image',
        'father_name',
        'father_occupation',
        'father_mobile',
        'father_cnic',
        'mother_name',
        'mother_occupation',
        'mother_mobile_number',
        'present_address',
        'permanent_address',

    ];

    public function get_class_details()
    {
        return $this->hasOne(Classes::class, 'id', 'class');
    }
    public function get_studentAttendance_details()
    {
        return $this->hasMany(StudentAttendance::class, 'student_ids', 'id');
    }

}
