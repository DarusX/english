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
    'course_types' => 'CourseTypeController',
    'course_classifications' => 'CourseClassificationController',
    'course_options' => 'CourseOptionController',
    'departments' => 'DepartmentController',
    'courses' => 'CourseController',
    'lists' => 'CourseStudentController',
    'students' => 'StudentController',
    'items' => 'ItemController',
    'employees' => 'EmployeeController',
]);
Route::prefix('/report')->group(function(){ 
    Route::get('/lista/{id}', 'CourseStudentController@lista')->name('report.lista');
    Route::get('/course', 'CourseController@lista')->name('report.course');
    Route::get('/professor', 'ProfessorController@lista')->name('report.professor');
    Route::get('/student', 'StudentController@lista')->name('report.student');
    Route::get('/employee', 'EmployeeController@lista')->name('report.employee');
    
});

Route::prefix('/page')->group(function(){
    Route::get('/student', 'StudentSiteController@index')->name('page.student');
    Route::get('/student/score', 'StudentSiteController@score')->name('student.score');
    Route::get('/student/schedule', 'StudentSiteController@schedule')->name('student.schedule'); 
    Route::get('/student/password', 'StudentSiteController@password')->name('student.password');
    Route::post('/student/updatepassword', 'StudentSiteController@updatepassword')->name('student.updatepassword');
    
    Route::get('/professor', 'ProfessorSiteController@index')->name('page.professor');
    Route::get('/professor/schedule', 'ProfessorSiteController@schedule')->name('professor.schedule');  
    Route::get('/professor/{id}/list', 'ProfessorSiteController@show')->name('professor.list');
    Route::get('/professor/password', 'ProfessorSiteController@password')->name('professor.password');
    Route::post('/professor/updatepassword', 'ProfessorSiteController@updatepassword')->name('professor.updatepassword');     
    
    Route::get('/employee', 'EmployeeGeneralController@index')->name('page.employee');
    Route::get('/employee/password', 'EmployeeGeneralController@password')->name('employee.password');
    Route::post('/employee/updatepassword', 'EmployeeGeneralController@updatepassword')->name('employee.updatepassword');   

    Route::get('recepcionist/list', 'RecepcionistSiteController@course')->name('recepcionist.list'); 
    Route::get('courselist/{id}/show', 'RecepcionistSiteController@show')->name('courselist.show');
    Route::get('/recepcionist/student', 'RecepcionistSiteController@student')->name('recepcionist.student'); 
    Route::post('/recepcionist/store', 'RecepcionistSiteController@store')->name('recepcionist.store');    
    
    
    Route::get('administrative/list', 'AdministrativeSiteController@course')->name('administrative.list'); 
    Route::get('administrative/{id}/show', 'AdministrativeSiteController@show')->name('administrative.show');
    Route::get('/administrative/student', 'AdministrativeSiteController@student')->name('administrative.student'); 
    Route::get('/administrative/{id}/inscription', 'AdministrativeSiteController@inscription')->name('administrative.inscription'); 
    Route::post('administrative/{id}/storeinscription', 'AdministrativeSiteController@storeinscription')->name('administrative.storeinscription');
});
//Route::get('/home', 'Auth\LoginController@redirectPath')->name('home');
Route::POST('/students/search', 'StudentController@search')->name('students.search');
Route::get('/ajax/professors', 'ProfessorController@ajax')->name('professors.ajax');
Route::get('/ajax/students', 'StudentController@ajax')->name('students.ajax');
Route::get('/ajax/courses', 'CourseController@ajax')->name('courses.ajax');
Route::get('/ajax/lists', 'CourseStudentController@ajax')->name('lists.ajax');
Route::get('/ajax/branches', 'BranchController@ajax')->name('branches.ajax');
Route::get('/ajax/levels', 'LevelController@ajax')->name('levels.ajax');
Route::get('/ajax/course_classifications', 'CourseClassificationController@ajax')->name('course_classifications.ajax');
Route::get('/ajax/course_types', 'CourseTypeController@ajax')->name('course_types.ajax');
Route::get('/ajax/options', 'CourseOptionController@ajax')->name('options.ajax');
Route::get('/ajax/items', 'ItemController@ajax')->name('items.ajax');
Route::get('/ajax/employees', 'EmployeeController@ajax')->name('employees.ajax');
Route::get('/ajax/recepcionist', 'RecepcionistSiteController@ajax')->name('recepcionist.ajax');
Route::get('/ajax/aministrative', 'AdministrativeSiteController@ajax')->name('administrative.ajax');