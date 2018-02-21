<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DateTime;
use App\User;
use App\Branch;
use PDF;
use App\Role;
use Dhtmlx\Connector\JSONDataConnector;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Ver maestros']);
        return view('student.index')->with([
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Crear usuario alumno']);
        return view('student.create')->with([
            'branches' => Branch::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        $username =  $this->username($request);
        User::create([
            'username' => $username,
            'password' => bcrypt($username),
            'name' => $request->name.' '.$request->lastname
        ]);
        return redirect()->route('students.edit', [
            'id' => $student->id
        ]);
    }
    public function search(Request $request)
    {
        return view('student/search')->with([
            'students' => Student::where('name','LIKE','%'.$request->name.'%')->get()
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('student.show')->with([
            'student' => Student::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request->user()->authorizeRoles(['name' => 'Editar usuario alumno']);
        return view('student.edit')->with([
            'student' => Student::find($id),
            'branches' => Branch::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Student::find($id)->update($request->all());
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
    public function lista(Request $request){
        $lista = Student::all();
        $pdf = PDF::loadview('report.student_list', compact('lista'))->setPaper('legal', 'landscape');
        return $pdf->stream('students.pdf');
    }
    
}
