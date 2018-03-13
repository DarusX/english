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
use Hash;
use Validator;

class RecepcionistSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('page.employee')->with([
            'datos' => Employee::where('matricula', Auth::user()->username)->get()->first()
        ]);
    }
    public function course(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Recepcionista']);    
        return view('recepcionist.course')->with([
            'courses' => Course::where('start_date', '>', Carbon::now())->get()
        ]);
    }
    public function show($id)
    {
        return view('recepcionist.show')->with([
            'course' => Course::findOrFail($id)   
        ]);
    }
    public function student(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Recepcionista']);
        
        return view('recepcionist.student')->with([
            'students' => Student::all()
        ]);
    }
    public function create(Request $request)
    {    
        return view('recepcionist.create')->with([
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
        return redirect()->route('recepcionist.student');
    }
    public function username($data){
        $n = $data->name;
        $l = $data->lastname;
        $b = DateTime::createFromFormat('Y-m-d',$data->birthdate);
        $b = $b->format('ym');
        $str = $n[0].$n[1].$l[0].$l[1].$b;
        return strtoupper($str);
    }
    public function password(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Recepcionista']);
        return view('employee.password')->with([
            'user' => User::where('username', Auth::user()->username)->get()->first()
        ]);
    }

    public function updatepassword(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Recepcionista']);
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
            return redirect('page/employee/password')->withErrors($validator);
        }
        else{
        if (Hash::check($request->mypassword, Auth::user()->password)){
            $user = new User;
            $user = User::where('username', Auth::user()->username)->get()->first()
                 ->update(['password' => bcrypt($request->password)]);
                 return redirect()->route('page.employee'); 
            }
            else
            {
                return redirect('page/employees/password')->with('message', 'Credenciales incorrectas');
            }
        }
    }
}
