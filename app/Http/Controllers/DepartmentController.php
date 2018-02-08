<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {;
        return view('department.index')->with([
            'departments' => Department::all()
        ]);
    }
    public function edit($id)
    {
        return view('department.edit')->with([
            'department' => Department::find($id)
            ]); 
    }
    public function update(Request $request, $id)
    {
        Department::find($id)->update($request->all());
        return redirect()->route('departments.index');
    }
}
