<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseStudent;
use App\Course;
use PDF;

class CourseStudentController extends Controller
{
    public function index(Request $request)
    {
        return view('list.index')->with([
            'courses' => Course::all()]
        );
    }
    public function store(Request $request)
    {
        CourseStudent::create($request->all());
        return redirect()->back(); 
    }
    public function show($id)
    {
        return view('list.show')->with([
            'course' => Course::findOrFail($id)   
        ]);
    }
    public function edit($id)
    {
        return view('list.edit')->with
        (['list' => CourseStudent::find($id),
        'course' => course::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        CourseStudent::find($id)->update($request->all());
        return redirect()->back(); 
    }
    public function destroy($id)
    {
    }
    public function ajax(Request $request)
    {
        return response()->json(Course::all());
    }
    public function lista(Request $request, $id){
        $lista = CourseStudent::where('course_id', $id)->get();
        $pdf = PDF::loadview('report.student_list', compact('lista'))->setPaper('letter');
        return $pdf->download('VHGo.pdf');
    }
}