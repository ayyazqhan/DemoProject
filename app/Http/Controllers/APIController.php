<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use App\Discipline;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{

    public function getStudents()
    {
        $query = Student::select('first_name', 'last_name', 'email');
        return datatables($query)->make(true);
    }

    public function getCourses()
    {
        $query = Course::select('name', 'description', 'price');
        return datatables($query)->make(true);
    }

    public function getDiscipline()
    {
        $query = Discipline::select('id','name');
        return datatables($query)->make(true);
    }

}
