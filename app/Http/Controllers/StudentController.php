<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
class StudentController extends Controller
{
    public function create(Request $request){


    	$student=new Student();
    	$student->name=$request->name;
    	$student->email=$request->email;
        $student->number=$request->number;
        $student->country=$request->country;
        $student->course_id=$request->course_id;


        $student->save();
        return "success";
    }


    public function allstudents(){
    	$student= Student::all();
        $courses= Course::all();
    	return view('admin.allstudents',compact('student','courses'));
    }
}
