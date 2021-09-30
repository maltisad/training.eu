<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use DB;
class TeacherController extends Controller
{

    public function index(){
        $teachers=Teacher::all();
    	return view('admin.addteacher',compact('teachers'));

    	
    }
   public function create(Request $request){

    	$teacher=new Teacher();
    	$teacher->emri=$request->emri;
    	$teacher->mbiemri=$request->mbiemri;
      $teacher->titulli=$request->titulli;

         if($request->hasFile('image')){
          $file= $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename= time() . '.' .$extension;

          $file->move('uploads/teacher/', $filename);

          $teacher->image=$filename;

        }
        else {
          return $request;
          $teacher->image = '';
        }

          $teacher->save();
        return redirect('addteacher');

    	

    	//return redirect('/addteacher');
    }
    public function edit($id){

    $data['teachers']=Teacher::find($id);
    if($data['teachers']!==null){
        return view('admin.edit',$data);
    }
    else{
        echo "se gjeta";
    }
    } 

     public function update(Request $request,$id){ 
       
        $teacher = Teacher::find($id);
        $teacher->emri = $request->emri;
        $teacher->mbiemri = $request->mbiemri;
         $teacher->titulli = $request->titulli;

         if($request->hasFile('image')){
          $file= $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename= time() . '.' .$extension;

          $file->move('uploads/teacher/', $filename);

          $teacher->image=$filename;
        }
        
        $teacher->save();
      return redirect('addteacher');
   } 



     public function allteacher(){
     	$teachers = DB::table('teachers')->get();
    	return view('teachers',compact('teachers'));
    
    	
    }

      public function destroy($id){
           $teachers=Teacher::find($id);
           $teachers->delete();

          return redirect('/addteacher');
   }
}
