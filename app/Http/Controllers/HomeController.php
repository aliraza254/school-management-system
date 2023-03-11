<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Expenses;
use App\Models\Fees;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $std_count = Student::count();
        $teacher_count = Teacher::count();
        $fees = Fees::select('amount')->get();
        $totalFees = 0;
        foreach ($fees as $single){
            $totalFees = $totalFees + $single->amount;
        }
        $expense = Expenses::select('amount')->get();
        $totalExpense = 0;
        foreach ($expense as $single){
            $totalExpense = $totalExpense + $single->amount;
        }
        return view('home', compact('teacher_count', 'std_count', 'totalExpense', 'totalFees'));
    }
}
