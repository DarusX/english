<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use PDF;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('branch.index')->with([
            'branches' => Branch::all()
        ]);
    }
    public function create(Request $request)
    {
        return view('branch.create');
    }
    public function store(Request $request)
    {
        $Branch = Branch::create($request->all());

        return redirect()->route('branches.index');
    }
    public function show($id)
    {
        return view('branch.show')->with([
            'branch' => Branch::findOrFail($id)
        ]);  
    }
    public function edit($id)
    {
        return view('branch.edit')->with([
            'branch' => Branch::find($id),
            ]); 
    }
    public function update(Request $request, $id)
    {
        Branch::find($id)->update($request->all());
        return redirect()->route('branches.index');
    }
    public function destroy($id)
    {
    
    }
    public function ajax(Request $request)
    {
        return response()->json(Branch::all());
    }
}
