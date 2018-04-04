<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Employee;
use App\User;
use App\Role;
use App\Course;
use App\Student;
use App\Branch;
use DateTime;

class AdministrativeSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function course(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Administrativo']);    
        return view('administration.course')->with([
            'courses' => Course::where('start_date', '>', Carbon::now())->get()
        ]);
    }
    public function show($id)
    {
        return view('administration.show')->with([
            'course' => Course::findOrFail($id)   
        ]);
    }
    public function student(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Administrativo']);
        return view('administration.pre-registered')->with([
            'students' => Student::Preinscrito(),
            'branches' => Branch::all()
        ]);
    }
    public function inscription($id, Request $request)
    {   
        return view('administration.inscription')->with([
            'student' => Student::find($id),
            ]); 
    }
    public function storeinscription($id, Request $request)
    {
        $username =  $this->username($request);
        $user = User::create([
            'username' => $username,
            'password' => bcrypt($username),
            'name' => $request->name.' '.$request->lastname
        ])->roles()->attach(Role::where('name', 'Estudiante')->get()->first());
        $student = Student::find($id);
        $student->update([
            'name' => $request->name.' '.$request->lastname,
            'birthdate' => $request->birthdate,
            'matricula' => $username,
            'status_id' => $request->status_id,
            'registration_date' => Carbon::now()
        ]);
        return redirect()->route('administration.student');
    }
    public function username($data){
        $n = $data->name;
        $l = $data->lastname;
        $b = DateTime::createFromFormat('Y-m-d',$data->birthdate);
        $b = $b->format('ym');
        $str = $n[0].$n[1].$l[0].$l[1].$b;
        return strtoupper($str);
    }
    public function ajax(Request $request)
    {
        return response()->json(Student::all());
    }
}
