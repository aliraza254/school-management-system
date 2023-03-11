<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\FeesController;
use App\Models\Student;
use App\Models\Teacher;
use Response;

class AjaxController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function std_name(){
        $stdID = $_POST['std_id'];

        $stdData = Student::with('get_class_details')->where('id', $stdID)->get();
        $std_dis = $stdData[0]->fee_discount;
        $class_fee = $stdData[0]->get_class_details['fees'];
        $fee_amount = $class_fee - $std_dis;
        return response()->json([
            'status'=> 200,
            'fee_amount' => $fee_amount,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function family_records(){
        $fatherCnic = $_POST['fatherCnic'];
        $stdData = Student::with('get_class_details')->where('father_cnic', $fatherCnic )->get();
        $total = 0;
        foreach ($stdData as $single){
            $stdDis = $single->fee_discount;
            $total = $total + $single->get_class_details['fees'] - $stdDis;
        }
        return response()->json([
            'status'=> 200,
            'fee_amount' => $total,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salary_records(){
        $fatherCnic = $_POST['teacher'];
        $teacherData = Teacher::where('id', $fatherCnic )->get();
        $teacherSalary = $teacherData[0]->salary;

        return response()->json([
            'status'=> 200,
            'teacherSalary' => $teacherSalary,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function std_attendance(){
        $classID = $_POST['class'];
        $classes = Classes::with('get_student_details')->where('id', $classID )->get();
        $data = array();
        foreach ($classes as $class){
            foreach ($class->get_student_details as $single){
                $student_id = $single->id;
                $first_name = $single->first_name;
                $last_name = $single->last_name;
                $student_data = array(
                    'student_id' => $student_id,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                );
                $data[] = $student_data;
            }
        }
        return response()->json([
            'status'=> 200,
            'studentDetails' => $data,
        ]);
    }
}
