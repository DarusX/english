<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;

class LevelController extends Controller
{
    public function index(Request $request)
    {
        return view('level.index')->with(['niveles' => Level::all()]);
    }
    public function create(Request $request)
    {
        return view('level.create');
    }
    public function store(Request $request)
    {
        $nivel = Level::create($request->all());
        return redirect()->route('level.index');
    }
    public function edit($id)
    {
        return view('level.edit')->with([
            'nivel' => Level::find($id),
            ]); 
    }
    public function update(Request $request, $id)
    {
        Level::find($id)->update($request->all());
        return redirect()->route('level.index');
    }
    public function destroy($id)
    {
    }
}
