<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use DateTime;
use App\User;
use PDF;
use App\Role;
use Dhtmlx\Connector\JSONDataConnector;

class ProfessorController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Administrador']);
        $request->user()->authorizeRoles(['name' => 'Jefe de académico']);
        return view('professor.index')->with([
            'professors' => Professor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Administrador']);
        $request->user()->authorizeRoles(['name' => 'Jefe de académico']);
        return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username =  $this->username($request);       
        User::create([
            'username' => $username,
            'password' => bcrypt($username),
            'name' => $request->name.' '.$request->lastname
            ])->roles()->attach(Role::where('name', 'Profesor')->get()->first()); 
            $professor = Professor::create($request->all()); 
            $professor->update([
                'matricula' => $username,
            ]);
        return redirect()->route('professors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('professor.show')->with([
            'professor' => Professor::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $request->user()->authorizeRoles(['name' => 'Administrador']);
        return view('professor.edit')->with([
            'professor' => Professor::find($id)
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
        Professor::find($id)->update($request->all());
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
        return response()->json(Professor::all());
    }
    public function lista(Request $request){
        $lista = Professor::all();
        $pdf = PDF::loadview('report.professor_list', compact('lista'))->setPaper('legal', 'landscape');
        return $pdf->stream('professors.pdf');
    }
}
