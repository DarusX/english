<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Student;
use App\Professor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data=null;
        if(Auth::user()->authorizeRoles(['name'=>"Estudiante"]))
        {
            $data = Student::where('matricula', Auth::user()->username)->get()->first();
        }
        elseif(Auth::user()->authorizeRoles(['name'=>"Profesor"]))
        {
            $data = Professor::where('matricula', Auth::user()->username)->get()->first();
        }
        else
        {
            $data = User::where('username', Auth::user()->username)->get()->first();
        }
        return view('home')->with([
            'datos' => $data
        ]);
    }
}
