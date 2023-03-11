<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expenses;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'gender',
        'dob',
        'mobile',
        'joining_date',
        'qualification',
        'experience',
        'salary',
        'security_type',
        'security_fee',
        'image',
        'address',
        'city',
        'state',
        'zipcode',
        'country',

    ];
}
