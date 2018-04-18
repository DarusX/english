<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\PaymentDetail;
use App\Student;
use App\Income;
use App\Course;
use App\Item;
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
        return redirect('payments/coursedetail/'.$payment->id);
    }
    public function storei(Request $request)
    {       
        $payment= Payment::create($request->all());
        return redirect('payments/itemdetail/'.$payment->id);
    }
    public function detailc($id)
    { 
        return view('payment.coursedetail')->with([
            'payment' => Payment::find($id)
            ]);
    }
    public function coursedetail(Request $request)
    {       
        $detail= PaymentDetail::create($request->all());
        return redirect('payments/coursedetail/'.$request->payment_id);
        dd($request->all());
    }
    public function detaili($id)
    { 
        return view('payment.itemdetail')->with([
            'payment' => Payment::find($id)
            ]);
    }
    public function itemdetail(Request $request)
    {       
        $detail= PaymentDetail::create($request->all());
        return redirect('payments/itemdetail/'.$request->payment_id);
        dd($request->all());
    }
    public function destroy($id)
    {
       PaymentDetail::destroy($id);
        return redirect()->back();
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
        $income = Income::create($request->all());
        return redirect()->route('payments.index');
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
    public function searchitem(Request $request)
    {
        return view('item/search')->with([
            'items' => Item::where('name','LIKE','%'.$request->name.'%')->get()
            ]);
    }
}
