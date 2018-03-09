<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Student;
use App\User;
use App\Course;
use Hash;
use Validator;


class StudentSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('page.student')->with([
            'datos' => Student::where('matricula', Auth::user()->username)->get()->first()
        ]);
    }
    public function score(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Estudiante']);
        
        return view('student.score')->with([
            'student' => Student::where('matricula', Auth::user()->username)->get()->first()
        ]);
    }
    public function schedule(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Estudiante']);
        
        return view('student.schedule')->with([
            'student' => Student::where('matricula', Auth::user()->username)->get()->first(),
            'horario' => Course::whereDate('start_date', '=', Carbon::now()->format('Y-m-d'))->get()
        ]);
    }
    public function password(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Estudiante']);
        return view('student.password')->with([
            'user' => User::where('username', Auth::user()->username)->get()->first()
        ]);
    }

    public function updatepassword(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Estudiante']);
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
            return redirect('page/students/password')->withErrors($validator);
        }
        else{
        if (Hash::check($request->mypassword, Auth::user()->password)){
            $user = new User;
            $user = User::where('username', Auth::user()->username)->get()->first()
                 ->update(['password' => bcrypt($request->password)]);
                 return redirect()->route('page.student'); 
            }
            else
            {
                return redirect('page/students/password')->with('message', 'Credenciales incorrectas');
            }
        }
    }


}
