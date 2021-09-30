<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','FrontController@index'); 
Route::get('/teachers','FrontController@teachers');
Route::get('/courses','FrontController@courses'); 


Route::get('/admin', function () {
    return view('admin.adminpane');
});


//ADMIN PART//
Route::get('/addteacher','TeacherController@index');
Route::post('/addteacher/create','TeacherController@create');
Route::get('/addteacher/delete/{id}','TeacherController@destroy');
Route::get("/addteacher/edit/{id}",'TeacherController@edit');
Route::put("/updatepost/{id}",'TeacherController@update');
Route::get('/allstudents','StudentController@allstudents');


//Courses//
Route::get('/addcourse','CourseController@index'); 
Route::post('/addcourse/create','CourseController@create');
Route::get("/addcourse/edit/{id}",'CourseController@edit');
Route::get('/allcourses','CourseController@allcourses'); 
Route::get('/addcourse/delete/{id}','CourseController@destroy');
Route::put("/updatecourse/{id}",'CourseController@update');

//Students //
Route::get('/enroll/{id}','FrontController@register');
Route::post('/enroll','StudentController@create');