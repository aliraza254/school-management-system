<?php

namespace App\Http\Controllers;

use App\Models\TeacherAttendance;
use App\Http\Requests\StoreTeacherAttendanceRequest;
use App\Http\Requests\UpdateTeacherAttendanceRequest;

class TeacherAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $attendanceDetails = Classes::with('get_attendance_details')->orderBy('class', 'asc')->get();
        return view('attendance.teacher attendance.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendance.teacher attendance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherAttendanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherAttendanceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherAttendance  $teacherAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherAttendance $teacherAttendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherAttendance  $teacherAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherAttendance $teacherAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherAttendanceRequest  $request
     * @param  \App\Models\TeacherAttendance  $teacherAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherAttendanceRequest $request, TeacherAttendance $teacherAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherAttendance  $teacherAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherAttendance $teacherAttendance)
    {
        //
    }
}
