<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all()->toArray();
        return view('Employee.ManageEmp', compact('employees') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee.AddEmp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'emp_id' => 'required',
            'dep_id' => 'required',
            'hod_id' => 'required',
            'e_name' => 'required',
            'e_email' => 'required',
            'e_designation' => 'required',
            'e_phoneno' => 'required',
            'e_address' => 'required',
            'e_password' => 'required'
          
            
        ]);

        $employee = new Employee(
            [
                'emp_id' => $request->get('emp_id'),
                'dep_id' => $request->get('dep_id'),
                'hod_id' => $request->get('hod_id'),
                'e_name' => $request->get('e_name'),
                'e_email' => $request->get('e_email'),
                'e_designation' => $request->get('e_designation'),
                'e_phoneno' => $request->get('e_phoneno'),
                'e_address' => $request->get('e_address'),
                'e_password' => $request->get('e_password')
                
            ]);

            $employee ->save();
            return redirect()->route('Employee.index')->with('success','One Record Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee :: find($id);
        return view('Employee.editEmp', compact('employee','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'emp_id' => 'required',
            'dep_id' => 'required',
            'hod_id' => 'required',
            'e_name' => 'required',
            'e_email' => 'required',
            'e_designation' => 'required',
            'e_phoneno' => 'required',
            'e_address' => 'required',
          
        ]);

        $employees = Employee :: find($id);
        $employees->emp_id=$request->get('emp_id');
        $employees->dep_id=$request->get('dep_id');
        $employees->hod_id=$request->get('hod_id');
        $employees->e_name=$request->get('e_name');
        $employees->e_email=$request->get('e_email');
        $employees->e_designation=$request->get('e_designation');
        $employees->e_phoneno=$request->get('e_phoneno');
        $employees->e_address=$request->get('e_address');
        $employees->save();
        return redirect()->route('Employee.index')->with('success','One Record Updated Successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
       return redirect()->route('Employee.index')->with('success','Data has been deleted Successfully');
    }
}
