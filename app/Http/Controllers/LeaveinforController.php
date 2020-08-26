<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leaveinfor;

class LeaveinforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaveinfors = Leaveinfor::all()->toArray();
        return view('Leaveinfor.ManageLeave', compact('leaveinfors') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Leaveinfor.AddLeave');
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
            'lev_id' => 'required',
            'lev_type' => 'required',
            'lev_description' => 'required',
            'lev_num' => 'required'
        ]);

        $leaveinfor = new Leaveinfor(
            [
                'lev_id' => $request->get('lev_id'),
                'lev_type' => $request->get('lev_type'),
                'lev_description' => $request->get('lev_description'),
                'lev_num' => $request->get('lev_num')
            ]);
            $leaveinfor ->save();
            return redirect()->route('Leaveinfor.index')->with('success','One Record Added Successfully');
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
        $leaveinfor = Leaveinfor:: find($id);
        return view('Leaveinfor.editLeave', compact('leaveinfor','id'));
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
            'lev_id' => 'required',
            'lev_type' => 'required',
            'lev_description' => 'required',
            'lev_num' => 'required'
        ]);

        $leaveinfors = Leaveinfor:: find($id);
        $leaveinfors->lev_id=$request->get('lev_id');
        $leaveinfors->lev_type=$request->get('lev_type');
        $leaveinfors->lev_description=$request->get('lev_description');
        $leaveinfors->lev_num=$request->get('lev_num');

        $leaveinfors->save();
        return redirect()->route('Leaveinfor.index')->with('success','One Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leaveinfor = Leaveinfor::find($id);
        $leaveinfor->delete();
       return redirect()->route('Leaveinfor.index')->with('success','Data has been deleted Successfully');
    }
}
