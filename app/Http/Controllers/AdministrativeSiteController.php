<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Employee;
use App\User;
use App\Course;
use App\Student;

class AdministrativeSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function course(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Administrativo']);    
        return view('administrative.course')->with([
            'courses' => Course::where('start_date', '>', Carbon::now())->get()
        ]);
    }
    public function show($id)
    {
        return view('administrative.show')->with([
            'course' => Course::findOrFail($id)   
        ]);
    }
    public function student(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Administrativo']);
        
        return view('administrative.student')->with([
            'students' => Student::all()
        ]);
    }
    public function item(Request $request)
    {
        return view('item.index')->with([
            'items' => Item::all()]
        );
    }
}
