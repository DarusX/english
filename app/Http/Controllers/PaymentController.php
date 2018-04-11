<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\PaymentDetail;
use App\Student;
use App\Income;
use App\Course;
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
        $payment= Payment::create($request->all());
        return redirect('payments/detail/'.$payment->id);
    }
    public function detail($id)
    { 
        return view('payment.detail')->with([
            'payment' => Payment::find($id)
            ]);
    }
    public function paymentdetail(Request $request)
    {       
        $detail= PaymentDetail::create($request->all());
        return redirect('payments/detail/'.$request->payment_id);
        dd($request->all());
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
    public function search(Request $request)
    {
        return view('student/payment-student')->with([
            'students' => Student::where('name','LIKE','%'.$request->name.'%')->get()
            ]);
    }
    public function searchcourse(Request $request)
    {
        return view('course/search')->with([
            'courses' => Course::where('course','LIKE','%'.$request->course.'%')->get()
            ]);
    }
}
