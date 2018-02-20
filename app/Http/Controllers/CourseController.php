<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\CourseOption;
use App\CourseType;
use App\Branch;
use App\Level;
use App\Professor;
use App\Classroom;
use App\CourseStudent;
use App\Student;
use PDF;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('course.index')->with([
            'courses' => Course::all()]
        );
    }
    public function create(Request $request)
    {
        return view('course.create')->with([
            'levels' => Level::all(),
            'types' => CourseType::all(),
            'options' => CourseOption::all(),
            'classrooms' => Classroom::all(),
            'professors' => Professor::all(),
            'branches' => Branch::all(),
            ]);
    }
    public function store(Request $request)
    {
        Course::create($request->all());
        return redirect()->route('courses.index');
    }
    public function show($id)
    {
        return view('course.show')->with([
            'course' => Course::findOrFail($id)   
        ]);
    }
    public function edit($id)
    {
        return view('course.edit')->with([
            'course' => Course::find($id),
            'levels' => Level::all(),
            'types' => CourseType::all(),
            'options' => CourseOption::all(),
            'classrooms' => Classroom::all(),
            'professors' => Professor::all(),
            'branches' => Branch::all()
        ]); 
    }
    public function update(Request $request, $id)
    {
        Course::find($id)->update($request->all());
        return redirect()->route('courses.index');
    }
    public function destroy($id)
    {
    }
    public function ajax(Request $request)
    {
        return response()->json(Course::all());
    }
    public function lista(Request $request){
        $lista = Course::all();
        $pdf = PDF::loadview('report.course_list', compact('lista'))->setPaper('letter', 'landscape');
        return $pdf->stream('courses.pdf');
    }
}
