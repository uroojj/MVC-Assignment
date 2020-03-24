<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();

        return view('index',compact('employee'));
    }

    public function insert_record()
    {
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $employee = new Employee;
        $employee->first_name = $request->input('firstname');
        $employee->last_name = $request->input('lastname');
        $employee->gender = $request->input('gender');
        $employee->HiredDate = $request->input('HiredDate');
        $employee->salary = $request->input('salary');
        $employee->save();

        return redirect('/')
                    ->with('success','Employee added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);

        return view('edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->first_name = $request->input('firstname');
        $employee->last_name = $request->input('lastname');
        $employee->gender = $request->input('gender');
        $employee->HiredDate = $request->input('HiredDate');
        $employee->salary = $request->input('salary');
        $employee->save();

        return redirect('/')
                    ->with('success','Employee Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/')
                        ->with('success','Employee deleted successfully');
    }
}
