<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Course;
use DB;
class FrontController extends Controller
{

	 public function index(){

         $courses=Course::all();
         $teachers=Teacher::all();
    		return view('index',compact('courses','teachers'));

    	}
    	
      public function courses(){
       
       $results = DB::table('courses')
                ->inRandomOrder()
                ->first();
          
      $courses = Course::all();

      return view('courses',compact('courses','results'));
    	
   	}

   	 public function teachers(){
     	$teachers = DB::table('teachers')->get();
    	return view('teachers',compact('teachers'));

    }

      public function register($id){
      $courses=Course::find($id);
      return view('course_enroll',compact('courses'));

    }
  

}
