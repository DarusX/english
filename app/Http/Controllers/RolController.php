<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class RolController extends Controller
{
    public function index(Request $request)
    {
    }
    public function edit(Request $request, $id)
    {
        return view('rol.edit')->with([
            'user' => User::find($id),
            'roles' => Role::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        User::find($id)->roles()->sync($request->role_id);
        return redirect()->route('home');
    } 
    public function show($id)
    {
    }
}
