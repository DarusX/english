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

class EmployeeGeneralController extends Controller
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
    public function edit(Request $request)
    {
        return view('employee.data')->with([
            'data' => Employee::where('matricula', Auth::user()->username)->get()->first(),
            'branches' => Branch::all()
        ]);
    }
    public function update(Request $request)
    {
        $data = Employee::where('matricula', Auth::user()->username)->get()->first()
        ->update($request->all());
        return redirect()->route('page.employee'); 
    }
    public function password(Request $request)
    {
        return view('employee.password')->with([
            'user' => User::where('username', Auth::user()->username)->get()->first()
        ]);
    }

    public function updatepassword(Request $request)
    {
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
