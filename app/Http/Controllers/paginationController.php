<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class paginationController extends Controller
{
    function index(){
        
        $allcomments = DB::table('allcomments')->orderBy('created_at','desc')->paginate(8);
        return view('Comment.showComment',compact('allcomments'));
        
    }
   
}

?>
