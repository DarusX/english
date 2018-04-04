<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Student;
use App\User;
use App\Course;
use App\CourseStudent;
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
            'student' => Student::with([
                'lists' =>  CourseStudent::with([
                    'courses' =>function($query){
                    $query->where([
                        ['start_date', '<', Carbon::now()],
                        ['finish_date', '>', Carbon::now()]
                    ]);
                }
            ])->first()
            ])
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
            return redirect('page/student/password')->withErrors($validator);
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
                return redirect('page/student/password')->with('message', 'Credenciales incorrectas');
            }
        }
    }
    public function ajax(Request $request)
    {
        return response()->json(Student::all());
    }
}
