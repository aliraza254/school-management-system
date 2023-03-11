<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Classes;

class Fees extends Model
{
    use HasFactory;
    protected $table = 'fees';
    protected $fillable = [
        'fee_type',
        'fee_id',
        'type',
        'amount',
        'paid_date',
    ];

    public function get_fees_details()
    {
        return $this->hasMany(Student::class, 'id', 'fee_id');
    }
    public function get_student_details()
    {
        return $this->hasOne(Student::class, 'id', 'fee_id');
    }

}
