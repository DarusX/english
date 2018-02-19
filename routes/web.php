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
    Route::get('/course/lista', 'CourseController@lista')->name('course.lista');
    Route::get('/lista', 'ProfessorController@lista')->name('professor.lista');
    Route::get('/lista', 'StudentController@lista')->name('student.lista');
    
});
Route::POST('/students/search', 'StudentController@search')->name('students.search');
Route::get('/courses/{id}/inscription', 'CourseController@inscription')->name('courses.inscription');
Route::get('/courses/{id}/score', 'CourseController@score')->name('courses.score');
Route::post('/courses/{id}/storeScore', 'courseController@storeScore')->name('courses.storeScore');
Route::get('/ajax/professors', 'ProfessorController@ajax')->name('professors.ajax');
Route::get('/ajax/students', 'StudentController@ajax')->name('students.ajax');
Route::get('/ajax/courses', 'CourseController@ajax')->name('courses.ajax');
Route::get('/ajax/lists', 'CourseStudentController@ajax')->name('lists.ajax');
Route::get('/ajax/branches', 'BranchController@ajax')->name('branches.ajax');