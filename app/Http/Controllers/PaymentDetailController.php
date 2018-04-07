<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentDetailController extends Controller
{
    public function create(Request $request)
    {       
        $detail= PaymentDetail::create($request->all());
        return redirect('payment/detail/'.$request->payment_id);
    }
    public function detail($id)
    { 
        return view('payment.detail')->with([
            'pago' => Payment::find($id)
            ]);
    }
}
