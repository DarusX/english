<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Employee;
use App\User;
use App\Course;
use App\Student;
use App\Branch;
use DateTime;
use App\Role;

class RecepcionistSiteController extends Controller
{
    public function course(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Recepcionista']);    
        return view('sale.course')->with([
            'courses' => Course::where('start_date', '>', Carbon::now())->get()
        ]);
    }
    public function show($id)
    {
        return view('sale.show')->with([
            'course' => Course::findOrFail($id)   
        ]);
    }
    public function preregistered(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Recepcionista']);
        
        return view('sale.pre-registered')->with([
            'students' => Student::Preinscrito(),
            'branches' => Branch::all()
        ]);
    }
    public function student(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Recepcionista']);
        
        return view('sale.student')->with([
            'students' => Student::Inscrito(),
            'branches' => Branch::all()
        ]);
    }
    public function store(Request $request)
    { 
        $username =  $this->username($request);
        $user = User::create([
            'username' => $username,
            'password' => bcrypt($username),
            'name' => $request->name.' '.$request->lastname
        ])->roles()->attach(Role::where('name', 'Estudiante')->get()->first());     
        $student = Student::create($request->all());
        $student->update([
            'matricula' => $username,
        ]);
        return redirect()->route('sale.pre-registered');
    }
    public function username($data){
        $n = $data->name;
        $l = $data->lastname;
        $b = DateTime::createFromFormat('Y-m-d',$data->birthdate);
        $b = $b->format('ym');
        $str = $n[0].$n[1].$l[0].$l[1].$b;
        return strtoupper($str);
    }
}
