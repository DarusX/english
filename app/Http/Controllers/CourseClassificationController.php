<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseClassification;

class CourseClassificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('course_classification.index')->with([
            'classifications' => CourseClassification::all()]
        );
    }
    public function create(Request $request)
    {
        return view('course_classification.create');
    }
    public function store(Request $request)
    {
        CourseClassification::create($request->all());
        return redirect()->route('course_classifications.index');
    }
    public function show($id)
    {
        return view('course_classification.show')->with([
            'classification' => CourseClassification::findOrFail($id)   
        ]);
    }
    public function edit($id)
    {
        return view('course_classification.edit')->with([
            'classification' => CourseClassification::find($id)
        ]); 
    }
    public function update(Request $request, $id)
    {
        CourseClassification::find($id)->update($request->all());
        return redirect()->route('course_classifications.index');
    }
    public function destroy($id)
    {
    }
    public function ajax(Request $request)
    {
        return response()->json(CourseClassification::all());
    }
}
