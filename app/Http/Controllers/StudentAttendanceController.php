<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\Classes;
use App\Models\Student;
use App\Models\StudentAttendance;
use App\Http\Requests\StoreStudentAttendanceRequest;
use App\Http\Requests\UpdateStudentAttendanceRequest;

class StudentAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $attendanceDetails = Classes::with('get_attendance_details')->orderBy('class', 'asc')->get();
        return view('attendance.students attendance.index', compact('attendanceDetails', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all();
        return view('attendance.students attendance.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentAttendanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentAttendanceRequest $request)
    {
        $attendanceType = $_POST['attendance_type'];
        $studentLists = $_POST['student_ids'];
        $created_at = \Carbon\Carbon::now()->toDateTimeString();
        if ($attendanceType == 'absent'){
            foreach ($studentLists as $single){
                $data = [
                    ['class' => $request->class, 'student_ids' => $single, 'attendance_type' => $request->attendance_type, 'date' => $request->date,'created_at' => $created_at,]
                ];
                StudentAttendance::insert($data);
            }
        } elseif ($attendanceType == 'leave'){
            foreach ($studentLists as $single){
                $data = [
                    ['class' => $request->class, 'student_ids' => $single, 'attendance_type' => $request->attendance_type, 'date' => $request->date, 'created_at' => $created_at,]
                ];
                StudentAttendance::insert($data);
            }
        }else{
            foreach ($studentLists as $single){
                $data = [
                    ['class' => $request->class, 'student_ids' => $single, 'attendance_type' => $request->attendance_type, 'date' => $request->date, 'created_at' => $created_at,]
                ];
                StudentAttendance::insert($data);
            }
        }
        return redirect()->route('students-attendance.index')->with('success','Student Attendance Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentAttendance  $studentAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(StudentAttendance $studentAttendance, $id)
    {
        $data = Student::with('get_studentAttendance_details')->where('class', $id )->get();
        $monthDays = Carbon::now()->daysInMonth;
        $days = [];
        for ($i = 1; $i <= $monthDays; $i++) {
            $days[] = $i;
        }
//        dd($data);
        return view('attendance.students attendance.show', compact('data', 'monthDays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentAttendance  $studentAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentAttendance $studentAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentAttendanceRequest  $request
     * @param  \App\Models\StudentAttendance  $studentAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentAttendanceRequest $request, StudentAttendance $studentAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentAttendance  $studentAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentAttendance $studentAttendance)
    {
        //
    }
}

//$monthDays = Carbon::now()->daysInMonth;
//$days = [];
//for ($i = 1; $i <= $monthDays; $i++) {
//    $days[] = $i;
//}
//foreach ($results as $result){
//    $formattedDate = date('d', strtotime($result->date));
//    foreach ($days as $day){
//        if ($day == $formattedDate){
//            $show = $result->attendance_type;
//        }
//    }
//}
////        dd($results);










//$attendanceDetails = Student::with('get_studentAttendance_details')->orderBy('class', 'asc')->get();
//$currentMonthStart = Carbon::now()->startOfMonth()->toDateString();
//$currentMonthEnd = Carbon::now()->endOfMonth()->toDateString();
//$results = DB::table('student_attendances')->whereDate('created_at', '>=', $currentMonthStart)->whereDate('created_at', '<=', $currentMonthEnd)->get();
//$monthDays = Carbon::now()->daysInMonth;
//$days = [];
//for ($i = 1; $i <= $monthDays; $i++) {
//    $days[] = $i;
//}
//return view('attendance.students attendance.show', compact('attendanceDetails', 'results', 'days'));
