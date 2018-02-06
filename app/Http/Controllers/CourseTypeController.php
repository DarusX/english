<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseType;

class CourseTypeController extends Controller
{
    public function index(Request $request)
    {
        return view('type.index')->with([
            'types' => CourseType::all()
        ]);
    }
    public function create(Request $request)
    {
        return view('type.create');
    }
    public function store(Request $request)
    {
        $Type = CourseType::create($request->all());
        return redirect()->route('types.index');
    }
    public function edit($id)
    {
        return view('type.edit')->with([
            'type' => CourseType::find($id),
            ]); 
    }
    public function update(Request $request, $id)
    {
        CourseType::find($id)->update($request->all());
        return redirect()->route('type.index');
    }
    public function destroy($id)
    {
    }
}
