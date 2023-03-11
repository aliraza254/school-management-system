<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Fees;
use App\Models\Student;
use App\Models\Classes;
use App\Http\Requests\StoreFeesRequest;
use App\Http\Requests\UpdateFeesRequest;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $fees = Fees::with('get_student_details')->get();
        return view('fee.index', compact('fees', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Classes::all();
        $student = Student::all();
//        $fatherCnic = Student::select('father_cnic')->distinct()->get();
        return view('fee.create', compact('class', 'student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeesRequest $request)
    {
        $fee_type = $_POST['fee_type'];
        if ($fee_type == 'Family') {
            $father_cnic = $_POST['cnic'];
            $studentRecords = DB::table('students')->where('father_cnic', $father_cnic)->get();
            foreach ($studentRecords as $single){
                $stdData = Student::with('get_class_details')->where('id', $single->id )->get();
                foreach ($stdData as $single){
                    $stdDis = $single->fee_discount;
                    $total = $single->get_class_details['fees'] - $stdDis;
                }
                $data = [
                    ['fee_type' => $request->fee_type, 'fee_id' => $single->id, 'type' => $request->type, 'amount' => $total, 'paid_date' => $request->paid_date,]
                ];
                Fees::insert($data);
            }
        }elseif ($fee_type == 'Admission No'){
            if(isset($_POST['reg_id']) && !empty($_POST['reg_id'])){
                $std_id = $_POST['reg_id'];
                Fees::create([
                    'fee_type' => $request->fee_type,
                    'fee_id' => $std_id,
                    'type' => $request->type,
                    'amount' => $request->amount,
                    'paid_date' => $request->paid_date,
                ]);
            }
        }else{
            $std_id = $_POST['std_id'];
            Fees::create([
                'fee_type' => $request->fee_type,
                'fee_id' => $std_id,
                'type' => $request->type,
                'amount' => $request->amount,
                'paid_date' => $request->paid_date,
            ]);
        }
        return redirect()->route('fees.index')->with('success','Fees has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function show(Fees $fees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function edit(Fees $fees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeesRequest  $request
     * @param  \App\Models\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeesRequest $request, Fees $fees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fees $fees, $id)
    {

        DB::delete('delete from fees where id = ?',[$id]);
        return redirect()->route('fees.index')->with('success','Fees has been deleted successfully');
    }
}
