<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class StudentAttendance extends Model
{
    use HasFactory;
    protected $table = 'student_attendances';
    protected $fillable = [
        'class',
        'student_ids',
        'attendance_type',
        'date',
    ];
}
