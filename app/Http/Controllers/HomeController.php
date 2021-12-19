<?php

namespace App\Http\Controllers;

use App\Customer;
use Auth;
class HomeController extends Controller
{

    public function index()
    {
        return view('students.ajax');
    }
    public function courses()
    {
        return view('courses.ajax');
    }

    public function disciplines()
    {
        return view('disciplines.ajax');
    }

    public function enrollment(){

        if(!Auth::check()) 
        {
            return view('auth.login');
       
        }else{
            return view('enrollment.index');
        }
        
        
    }
    
}
