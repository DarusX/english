<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use App\Student;
use App\Professor;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    public function redirectTo()
    {
        if(Auth::user()->authorizeRoles(['name'=>"Administrador"]))
        {
            return '/home';
        }
        elseif(Auth::user()->authorizeRoles(['name'=>"Estudiante"]))
        {
            //$data = Student::where('matricula', Auth::user()->username)->get()->first();
            return '/page/student';
        }
        elseif(Auth::user()->authorizeRoles(['name'=>"Profesor"]))
        {
            //$data = Professor::where('matricula', Auth::user()->username)->get()->first();
            return '/page/professor';
    
        }
        
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }
}
