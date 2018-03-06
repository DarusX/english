<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'professors' => 'ProfessorController',
    'branches' => 'BranchController',
    'levels' => 'LevelController',
    'course_type' => 'CourseTypeController',
    'classifications' => 'CourseClassificationController',
    'options' => 'CourseOptionController',
    'departments' => 'DepartmentController',
    'courses' => 'CourseController',
    'lists' => 'CourseStudentController',
    'students' => 'StudentController',
    'items' => 'ItemController',
]);
Route::prefix('/report')->group(function(){ 
    Route::get('/lista/{id}', 'CourseStudentController@lista')->name('report.lista');
    Route::get('/course', 'CourseController@lista')->name('report.course');
    Route::get('/professor', 'ProfessorController@lista')->name('report.professor');
    Route::get('/student', 'StudentController@lista')->name('report.student');
    
});

Route::prefix('/page')->group(function(){
    Route::get('/student', 'StudentSiteController@index')->name('page.student');
    Route::get('/students/score', 'StudentSiteController@score')->name('students.score');
    Route::get('/students/schedule', 'StudentSiteController@schedule')->name('students.schedule'); 
    Route::get('/students/password', 'StudentSiteController@password')->name('students.password');
    Route::POST('/students/updatepassword', 'StudentSiteController@updatepassword')->name('students.updatepassword');      
});
//Route::get('/home', 'Auth\LoginController@redirectPath')->name('home');
//Route::get('page/professor', 'Auth\LoginController@redirectPath')->name('page.professor');
Route::POST('/students/search', 'StudentController@search')->name('students.search');
Route::get('/ajax/professors', 'ProfessorController@ajax')->name('professors.ajax');
Route::get('/ajax/students', 'StudentController@ajax')->name('students.ajax');
Route::get('/ajax/courses', 'CourseController@ajax')->name('courses.ajax');
Route::get('/ajax/lists', 'CourseStudentController@ajax')->name('lists.ajax');
Route::get('/ajax/branches', 'BranchController@ajax')->name('branches.ajax');
Route::get('/ajax/levels', 'LevelController@ajax')->name('levels.ajax');
Route::get('/ajax/course_type', 'CourseTypeController@ajax')->name('course_type.ajax');
Route::get('/ajax/options', 'CourseOptionController@ajax')->name('options.ajax');
Route::get('/ajax/items', 'ItemController@ajax')->name('items.ajax');