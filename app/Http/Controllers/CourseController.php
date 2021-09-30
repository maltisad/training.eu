<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Course;
class CourseController extends Controller
{
     public function index(){
     	$teachers=Teacher::all();
      $courses= Course::all();
    	return view('admin.addcourse', compact('courses','teachers'));
    }
    
      public function create(Request $request){

    	$course=new Course();
    	$course->name=$request->name;
    	$course->description=$request->description;
      $course->price=$request->price;
      $course->objectives=$request->objectives;
       $course->start_date=$request->start_date;
      $course->duration=$request->duration;
      $course->extra=$request->extra;
      $course->teacher_id=$request->teacher;

         if($request->hasFile('image')){
          $file= $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename= time() . '.' .$extension;

          $file->move('uploads/course/', $filename);

          $course->image=$filename;

        }
        else {
          return $request;
          $course->image = '';
        }

          $course->save();
        return redirect('addcourse');

    	
    }

      public function edit($id){
            $teachers=Teacher::all();
         $courses=Course::find($id);
      
             return view('admin.editcourse',compact('courses','teachers'));
        
       } 
    
   	     public function update(Request $request,$id){ 
       
        $course = Course::find($id);
        $course->name=$request->name;
        $course->description=$request->description;
        $course->price=$request->price;
        $course->objectives=$request->objectives;
        $course->start_date=$request->start_date;
        $course->duration=$request->duration;
        $course->extra=$request->extra;
        $course->teacher_id=$request->teacher_id;
          
         if($request->hasFile('image')){
          $file= $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename= time() . '.' .$extension;

          $file->move('uploads/course/', $filename);

          $course->image=$filename;
        }
        
        $course->save();
      return redirect('addcourse');
   } 

        public function destroy($id){
           $courses=Course::find($id);
           $courses->delete();

          return redirect('/addcourse');
   }


       public function allcourses(){
      $teachers=Teacher::all();
      $courses= Course::all();
      return view('admin.allcourses', compact('courses','teachers'));
    }
}
