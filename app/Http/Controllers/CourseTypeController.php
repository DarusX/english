<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseType;

class CourseTypeController extends Controller
{
    public function index(Request $request)
    {
        return view('course_type.index')->with([
            'types' => CourseType::all()
        ]);
    }
    public function create(Request $request)
    {
        return view('course_type.create');
    }
    public function store(Request $request)
    {
        CourseType::create($request->all());
        return redirect()->route('course_type.index');
    }
    public function show($id)
    {
        return view('course_type.show')->with([
            'type' => CourseType::findOrFail($id)   
        ]);
    }
    public function edit($id)
    {
        return view('course_type.edit')->with([
            'type' => CourseType::find($id),
            ]); 
    }
    public function update(Request $request, $id)
    {
        CourseType::find($id)->update($request->all());
        return redirect()->route('course_type.index');
    }
    public function destroy($id)
    {
    }
    public function ajax(Request $request)
    {
        return response()->json(CourseType::all());
    }
}
