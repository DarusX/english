<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class SucursalController extends Controller
{
    public function index(Request $request)
    {
        return view('sucursal.index')->with([
            'sucursales' => Sucursal::all()
        ]);
    }
    public function create(Request $request)
    {
        return view('sucursal.create');
    }
    public function store(Request $request)
    {
        $sucursal = Sucursal::create($request->all());
        return redirect()->route('sucursal.index');
    }
    public function edit($id)
    {
        return view('sucursal.edit')->with([
            'sucursal' => Sucursal::find($id),
            ]); 
    }
    public function update(Request $request, $id)
    {
        Sucursal::find($id)->update($request->all());
        return redirect()->route('sucursal.index');
    }
    public function destroy($id)
    {
    
    }
    public function show($id)
    {
       
    }
}
