<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Expenses extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'quality',
        'amount',
        'sop',
        'date',
        'purchase_by',
    ];
    public function get_teacher_details()
    {
        return $this->hasOne(Teacher::class, 'id', 'purchase_by');
    }
}
