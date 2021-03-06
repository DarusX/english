<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Professor;
use App\Course;
use App\User;
use Hash;
use Validator;
use Carbon\Carbon;

class ProfessorSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $request->user()->authorizeRoles(['name' => 'Profesor']);
        return view('page.professor')->with([
            'datos' => Professor::where('matricula', Auth::user()->username)->get()->first()
        ]);
    }
    public function edit(Request $request)
    {
        return view('professor.data')->with([
            'data' => Professor::where('matricula', Auth::user()->username)->get()->first(),
            'branches' => Branch::all()
        ]);
    }
    public function update(Request $request)
    {
        $data = Professor::where('matricula', Auth::user()->username)->get()->first()
        ->update($request->all());
        return redirect()->route('page.professor'); 
    }
    public function show($id)
    {
        return view('professor.list')->with([
            'course' => Course::findOrFail($id)   
        ]);
    }
    public function schedule(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Profesor']);
        return view('professor.schedule')->with([
            'professor' => Professor::with([ 
                'courses' =>  function($query){
                    $query->where([
                        ['start_date', '<', Carbon::now()],
                        ['finish_date', '>', Carbon::now()]
                    ]);
                }
            ])->first()
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
    public function ajax(Request $request)
    {
        return response()->json(Professor::all());
    }
}
