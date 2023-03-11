<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentAttendance;
use App\Models\Student;


class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = [
        'class',
        'section',
        'fees',
    ];
    public function get_student_details()
    {
        return $this->hasMany(Student::class, 'class', 'id');
    }
    public function get_attendance_details()
    {
        return $this->hasMany(StudentAttendance::class, 'class', 'id');
    }

}
