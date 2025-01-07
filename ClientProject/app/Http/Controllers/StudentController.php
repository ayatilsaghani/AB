<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index(){
         $listOfStudents = Student::all();
         return view('Students', compact('listOfStudents'));
}
}