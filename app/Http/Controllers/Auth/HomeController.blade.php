
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
               'e_email' => 'required|email',
               'e_password' => 'required|alphaNum|min:3'
           ]);
    
           $employees = array(
               'e_email' => $request->get('e_email'),
               'e_password' => $request->get('e_password')
           );

           if (Auth::guard('employee')->attempt($employees)) {

            return redirect('/Home/emp/EmpProfile');
        }
           else
           {
                return back()->with('error','Invalide Login Details');
        
            }
        }
            function EmpProfile()
            {
                return view('EmpProfile');
            }
            function logout()
            {
                Auth::logout();
                return redirect('/Home/emp');
            }
    
    
    
}
