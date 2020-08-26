<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all()->toArray();
        return view('Department.ManageDep', compact('departments') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Department.AddDep');
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
            'dep_id' => 'required',
            'dep_name' => 'required',
            'dep_short_name' => 'required'
        ]);

        $department = new Department(
            [
                'dep_id' => $request->get('dep_id'),
                'dep_name' => $request->get('dep_name'),
                'dep_short_name' => $request->get('dep_short_name')
            ]);
            $department ->save();
            return redirect()->route('Department.index')->with('success','One Record Added Successfully');
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
        $department = Department::find($id);
        return view('Department.editDep', compact('department','id'));
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
            'dep_id' => 'required',
            'dep_name' => 'required',
            'dep_short_name' => 'required'
        ]);
        $department = Department::find($id);
        $department->dep_id=$request->get('dep_id');
        $department->dep_name=$request->get('dep_name');
        $department->dep_short_name=$request->get('dep_short_name');
        $department->save();
        return redirect()->route('Department.index')->with('success','One Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   $department = Department::find($id);
   $department->delete();
   return redirect()->route('Department.index')->with('success','Data has been deleted Successfully');
    }
}
