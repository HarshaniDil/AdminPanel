<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Head;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heads = Head::all()->toArray();
        return view('Head.ManageHead', compact('heads') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Head.AddHead'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'hod_id' => 'required',
            'h_name' => 'required',
            'dep_id' => 'required',
            'h_designation' => 'required',
            'h_phoneno' => 'required',
            'h_email' => 'required',
            'h_password'=>'required'
            
        ]);
        
        $head = new Head([
            'hod_id' => $request->get('hod_id'),
            'h_name' => $request->get('h_name'),
            'dep_id' => $request->get('dep_id'),
            'h_designation' => $request->get('h_designation'),
            'h_phoneno' => $request->get('h_phoneno'),
            'h_email' => $request->get('h_email'),
            'h_password' => $request->get('h_password')
        ]);
        $head->save();
        return redirect()->route('Head.index')->with('success','Data Added Successfully');   
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
        $head = Head:: find($id);
        return view('Head.editHead', compact('head','id'));
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
        $this->validate($request,[
            'hod_id' => 'required',
            'h_name' => 'required',
            'dep_id' => 'required',
            'h_designation' => 'required',
            'h_phoneno' => 'required',
            'h_email' => 'required'
            
        ]);
        
        $heads = Head:: find($id);
        $heads->hod_id=$request->get('hod_id');
        $heads->h_name=$request->get('h_name');
        $heads->dep_id=$request->get('dep_id');
        $heads->h_designation=$request->get('h_designation');
        $heads->h_phoneno=$request->get('h_phoneno');
        $heads->h_email=$request->get('h_email');

        $heads->save();
        return redirect()->route('Head.index')->with('success','One Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $head = Head::find($id);
    $head->delete();
   return redirect()->route('Head.index')->with('success','Data has been deleted Successfully');
    }
    
}
