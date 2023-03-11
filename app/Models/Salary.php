<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'paid_date',
        'paid_amount',
        'reduction_type',
        'fine',
        'security',
    ];
    public function get_teacher_details()
    {
        return $this->hasOne(Teacher::class, 'id', 'teacher_id');
    }
    public function get_salary_details()
    {
        return $this->hasMany(Teacher::class, 'id', 'teacher_id');
    }
}
