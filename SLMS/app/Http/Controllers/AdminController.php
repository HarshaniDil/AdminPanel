<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminController extends Controller
{
    function index(){
        return view('Adminlog');
}
function checklogin(Request $request)
    {
       $this->validate($request,[
           'email' => 'required|email',
           'password' => 'required|alphaNum|min:3'
       ]);
       $user_data = array(
           'email' => $request->get('email'),
           'password' => $request->get('password')
       );
       if(Auth ::attempt($user_data))
       {
            return redirect('main/AdminPanel');
       }
       else
       {
            return back()->with('error','Invalide Login Details');
    
        }
    }
        function AdminPanel()
        {
            return view('AdminPanel');
        }
        function logout()
        {
            Auth::logout();
            return redirect('/main');
        }

}