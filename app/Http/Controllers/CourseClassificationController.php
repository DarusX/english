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
        return view('classifications.index')->with([
            'classifications' => CourseClassification::all()]
        );
    }
    public function create(Request $request)
    {
        return view('classifications.create');
    }
    public function store(Request $request)
    {
        CourseClassification::create($request->all());
        return redirect()->route('classifications.index');
    }
    public function edit($id)
    {
        return view('classifications.edit')->with([
            'classification' => CourseClassification::find($id)
        ]); 
    }
    public function update(Request $request, $id)
    {
        CourseClassification::find($id)->update($request->all());
        return redirect()->route('classifications.index');
    }
    public function destroy($id)
    {
    }
}
