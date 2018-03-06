<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\User;


class StudentSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('/page/student')->with([
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
            'student' => Student::where('matricula', Auth::user()->username)->get()->first()
        ]);
    }
    public function password(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Estudiante']);
        return view('student.password')->with([
            'user' => User::where('username', Auth::user()->username)->get()->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Estudiante']);
        $user = User::where('username', Auth::user()->username)->get()->first();
        $user->update([
            'password' => bcrypt($request->password)
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
