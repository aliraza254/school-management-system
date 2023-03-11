<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Teacher;
use App\Http\Requests\StoreSalaryRequest;
use App\Http\Requests\UpdateSalaryRequest;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salary = Salary::with('get_teacher_details')->get();
        return view('salary.index', compact('salary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Teacher::all();
        return view('salary.create', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalaryRequest $request)
    {
        $reductionType = $_POST['reduction_type'];
        if($reductionType == 'Fine') {
            Salary::create([
                'teacher_id' => $request->teacher_id,
                'paid_amount' => $request->paid_amount,
                'paid_date' => $request->paid_date,
                'reduction_type' => $request->reduction_type,
                'fine' => $_POST['fine'],
                'security' => 0,
            ]);
            $msg = 'Salary has been created successfully.';
        }else{
            $fine = (isset($_POST['fine']) && !empty($_POST['fine'])) ? $_POST['fine'] : 0;
            $security = 0;
            $teacherId = $_POST['teacher_id'];
            if(isset($_POST['security']) && $_POST['security'] != 0) {
                $security = $_POST['security'];
                $teacherData = Teacher::where('id', $teacherId)->get();
                $salaryData = Salary::where('teacher_id', $teacherId)->get();
                $totalPaidSecurity = 0;
                $teacherSecurityType = $teacherData[0]->security_type;
                $teacherSecurityFee = $teacherData[0]->salary;
                foreach ($salaryData as $single) {
                    $totalPaidSecurity = $totalPaidSecurity + $single->security;
                }
                if (empty($security) == 0){
                    $totalPaid = $totalPaidSecurity + $security;
                    if (!empty($teacherSecurityType)) {
                        $teacherFee = $teacherSecurityFee * $teacherSecurityType;
                    }
                    if ($teacherFee <= $totalPaid) {
                        $error = $teacherFee - $totalPaidSecurity;
                        $errors = 'You are getting wrong amount. Please select exact value that is ' . $error;
                        return redirect()->route('salary.create')->with('error', $errors);
                    }
                }
            }


            Salary::create([
                'teacher_id' => $request->teacher_id,
                'paid_amount' => $request->paid_amount,
                'paid_date' => $request->paid_date,
                'reduction_type' => $request->reduction_type,
                'fine' => $fine,
                'security' => $security,
            ]);
            $msg = 'Salary has been created successfully.';
        }
        return redirect()->route('salary.index')->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalaryRequest  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalaryRequest $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        $salary->delete();
        return redirect()->route('salary.index')->with('success','Salary has been deleted successfully');
    }
}
