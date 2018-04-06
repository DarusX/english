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
Route::get('/students/pre-registered', 'StudentController@preregistered')->name('students.pre-registered'); 

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
    Route::get('/student/data', 'StudentSiteController@edit')->name('student.data');
    Route::post('/student/update', 'StudentSiteController@update')->name('student.update');
    Route::get('/student/password', 'StudentSiteController@password')->name('student.password');
    Route::post('/student/updatepassword', 'StudentSiteController@updatepassword')->name('student.updatepassword');
    
    Route::get('/professor', 'ProfessorSiteController@index')->name('page.professor');
    Route::get('/professor/data', 'ProfessorSiteController@edit')->name('professor.data');
    Route::post('/professor/update', 'ProfessorSiteController@update')->name('professor.update');
    Route::get('/professor/schedule', 'ProfessorSiteController@schedule')->name('professor.schedule');  
    Route::get('/professor/{id}/list', 'ProfessorSiteController@show')->name('professor.list');
    Route::get('/professor/password', 'ProfessorSiteController@password')->name('professor.password');
    Route::post('/professor/updatepassword', 'ProfessorSiteController@updatepassword')->name('professor.updatepassword');     
    
    Route::get('/employee', 'EmployeeGeneralController@index')->name('page.employee');
    Route::get('/employee/data', 'EmployeeGeneralController@edit')->name('employee.data');
    Route::post('/employee/update', 'EmployeeGeneralController@update')->name('employee.update');
    Route::get('/employee/password', 'EmployeeGeneralController@password')->name('employee.password');
    Route::post('/employee/updatepassword', 'EmployeeGeneralController@updatepassword')->name('employee.updatepassword');   

    Route::get('/sale/list', 'RecepcionistSiteController@course')->name('sale.list'); 
    Route::get('/courselist/{id}/show', 'RecepcionistSiteController@show')->name('courselist.show');
    Route::get('/sale/pre-registered', 'RecepcionistSiteController@preregistered')->name('sale.pre-registered'); 
    Route::get('/sale/student', 'RecepcionistSiteController@student')->name('sale.student'); 
    Route::post('/sale/store', 'RecepcionistSiteController@store')->name('sale.store');    
    
    
    Route::get('/administration/course', 'AdministrativeSiteController@course')->name('administration.course'); 
    Route::get('/administration/{id}/show', 'AdministrativeSiteController@show')->name('administration.show');
    Route::get('/administration/pre-registered', 'AdministrativeSiteController@preregistered')->name('administration.pre-registered'); 
    Route::get('/administration/student', 'AdministrativeSiteController@student')->name('administration.student'); 
    Route::get('/administration/{id}/inscription', 'AdministrativeSiteController@inscription')->name('administration.inscription'); 
    Route::post('administration/{id}/storeinscription', 'AdministrativeSiteController@storeinscription')->name('administration.storeinscription');
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
Route::get('/ajax/administrative', 'AdministrativeSiteController@ajax')->name('administrative.ajax');
Route::get('/ajax/student', 'StudentSiteController@ajax')->name('student.ajax');
Route::get('/ajax/employee', 'EmployeeGeneralController@ajax')->name('employee.ajax');
Route::get('/ajax/professor', 'ProfessorSiteController@ajax')->name('professor.ajax');