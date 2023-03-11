<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Classes;
use App\Http\Requests\StoreClassesRequest;
use App\Http\Requests\UpdateClassesRequest;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $classes = Classes::orderBy('class', 'asc')->get();
          return  view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassesRequest $request)
    {

        Classes::create($request->post());
        return redirect()->route('classes.index')->with('success','Class has been Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit(Classes $classes, $id)
    {
        $classes = Classes::find($id);
        return view('classes.edit',compact('classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassesRequest  $request
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassesRequest $request, Classes $classes , $id)
    {
        $classes = Classes::find($id);
        $classes->class = $request->class;
        $classes->section = $request->section;
        $classes->fees = $request->fees;
        $classes->save();
        return redirect()->route('classes.index')->with('success','Class Has Been updated successfully');

//        $classes->fill($request->post())->save();
//        return redirect()->route('classes.index')->with('success','Class Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $classes, $id)
    {
        DB::delete('delete from classes where id = ?',[$id]);
        return redirect()->route('classes.index')->with('success', 'Class has been deleted successfully');
    }
}
