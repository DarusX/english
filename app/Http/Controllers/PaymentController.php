<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\PaymentDetail;
use App\Student;
use App\Income;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        return view('payment.index')->with([
            'payments' => Payment::all(),
            'students' => Student::all()
        ]);
    }
    public function create()
    {
        return view('payment.create')->with([
            'students' => Student::all(),
            'payments' => Payment::all(),
            ]);
    }
    public function store(Request $request)
    {       
        $pago= Pagos::create($request->all());
        return redirect('payment/detail/'.$payment->id);
    }
    public function show($id)
    {
        return view('payment.show')->with([
            'payments' => Payment::find($id),
            'students' => Student::all(),
            ]);
    }
    public function edit($id)
    { 
        $date = Carbon::now();
        $date = $date->format('d-m-Y');
        return view('payment.edit')->with([
            'payment' => Payment::find($id),
            'date' => $date,
            ]);
    }
    public function update($id, Request $request)
    {   
        Income::find($id)->update($request->all());
        return redirect('payment.index');
    }
    public function ajax(Request $request)
    {
        return response()->json(Payment::all());
    }
}
