<?php

namespace App\Http\Controllers;

use App\Customer;

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

}
