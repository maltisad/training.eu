<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     public $timestamps = false;

     public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
      public function student()
    {
    	 return $this->hasMany(Student::class);
       
    }
}
