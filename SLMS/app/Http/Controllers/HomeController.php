<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Validator;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
        function index(){
            return view('Employeelogin');
    }
    function checklogin(Request $request)
        {
           $this->validate($request,[
               'email' => 'required|email',
               'password' => 'required|alphaNum|min:3'
           ]);
    
           $emp_data = array(
               'email' => $request->get('email'),
               'password' => $request->get('password')
           );
           if(Auth ::attempt($emp_data))
           {
                return redirect('/Home/emp/EmpProfile');
           }
           else
           {
                return back()->with('error','Invalide Login Details');
        
            }
        }
            function EmpProfile()
            {
                return view('Employee.EmpProfile');
            }
            function logout()
            {
                Auth::logout();
                return redirect('/Home/emp');
            }
    
    function ShowMyProfile(){
            return view('EmpDetails.MyProfile');
    } 

      function ShowLeaveForm(){
        return view('EmpDetails.LeaveForm');
}
    
}
