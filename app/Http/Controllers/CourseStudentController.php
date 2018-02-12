<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseStudent;

class CourseStudentController extends Controller
{
    public function index(Request $request)
    {
       
    }
    public function store(Request $request)
    {

    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        return view('courses.score')->with
        (['list' => CourseStudent::find($id),
        'course' => course::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
    }
}