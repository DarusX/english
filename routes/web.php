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
    'types' => 'CourseTypeController',
    'classifications' => 'CourseClassificationController',
    'options' => 'CourseOptionController'
]);
Route::get('/ajax/professors', 'ProfessorController@ajax')->name('professors.ajax');
