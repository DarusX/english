<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseOption;
use App\CourseClassification;

class CourseOptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('option.index')->with([
            'options' => CourseOption::all()]
        );
    }
    public function create(Request $request)
    {
        return view('option.create')->with([
            'classifications' => CourseClassification::all(),
            ]);
    }
    public function store(Request $request)
    {
        CourseOption::create($request->all());
        return redirect()->route('options.index');
    }
    public function show($id)
    {
        return view('option.show')->with([
            'option' => CourseOption::findOrFail($id)   
        ]);
    }
    public function edit($id)
    {
        return view('option.edit')->with([
            'option' => CourseOption::find($id),
            'classifications' => CourseClassification::all()
        ]); 
    }
    public function update(Request $request, $id)
    {
        CourseOption::find($id)->update($request->all());
        return redirect()->route('options.index');
    }
    public function destroy($id)
    {
    }
    public function ajax(Request $request)
    {
        return response()->json(CourseOption::all());
    }
}
