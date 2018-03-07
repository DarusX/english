<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Professor;
use App\User;
use Hash;
use Validator;

class ProfessorSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('page.professor')->with([
            'datos' => Professor::where('matricula', Auth::user()->username)->get()->first()
        ]);
    }
    public function schedule(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Profesor']);
        return view('professor.schedule')->with([
            'professor' => Professor::where('matricula', Auth::user()->username)->get()->first()
        ]);
    }
    public function password(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Profesor']);
        return view('professor.password')->with([
            'user' => User::where('username', Auth::user()->username)->get()->first()
        ]);
    }

    public function updatepassword(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Profesor']);
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|',
        ];
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('page/professors/password')->withErrors($validator);
        }
        else{
        if (Hash::check($request->mypassword, Auth::user()->password)){
            $user = new User;
            $user = User::where('username', Auth::user()->username)->get()->first()
                 ->update(['password' => bcrypt($request->password)]);
                 return redirect()->route('page.professor'); 
            }
            else
            {
                return redirect('page/professors/password')->with('message', 'Credenciales incorrectas');
            }
        }
    }
}
