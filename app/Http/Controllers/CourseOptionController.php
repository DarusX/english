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
        return view('options.index')->with([
            'options' => CourseOption::all()]
        );
    }
    public function create(Request $request)
    {
        return view('options.create')->with([
            'classifications' => CourseClassification::all(),
            ]);
    }
    public function store(Request $request)
    {
        CourseOption::create($request->all());
        return redirect()->route('options.index');
    }
    public function edit($id)
    {
        return view('options.edit')->with([
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
}
