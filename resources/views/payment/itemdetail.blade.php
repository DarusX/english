@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<br>
<div class="row">
    <div class="col-sm-1">
        <label for="">@lang('label.student')</label>
    </div>
    <div class="col-sm-3">
        <input type="text"  value="{{$payment->student->StudentName}}" class="form-control" disabled>
    </div>
    <div class="col-sm-1 col-sm-offset-5">
        <label for="">@lang('label.date')</label>
    </div>
    <div class="col-sm-2">
        <input type="text"  value="{{$payment->Date}}" class="form-control" disabled>
    </div>
</div><br>
<div class="row">
    <center>
        <b>Concepto a pagar<b>
    <center>
</div>
<br>
<div class="row">
    <div class="col-sm-1 col-sm-offset-3">
        <label for="">@lang('label.items')</label>
    </div>
    <div class="col-sm-3">
        <input type="text" id="item" class="form-control">
    </div>
    <div class="col-sm-1">
        <button type="button" id="searchitem" class="btn btn-default" title="Buscar">
        <i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
    </div>
</div>
<div class="row">
    <div class="col-sm-8 col-sm-offset-1" id="listi">
    </div>  
</div>
<br>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.item')</th>
                <th>@lang('head.discount')</th>
                <th>@lang('head.price')</th>
                <th>@lang('head.total_price')</th>
                <th>@lang('head.actions')</th>
            </tr>
        <tbody>
            @foreach($payment->details as $d)
            @isset($d->item_id)
            <tr>            
                <td>{{$d->item->name}}</td>     
                <td>{{$d->discount}}%</td>
                <td>${{$d->item->price}}</td> 
                <td>${{$d->priceDiscount}}</td>  
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="" class="btn btn-default">@lang('icon.delete')</a>
                    </div>
                </td>      
            </tr>
            @endisset
            @isset($d->course_id)
            <tr>            
                <td>Curso no. {{$d->course->course}}</td>
                <td>{{$d->discount}}%</td>
                <td>${{$d->course->price}}</td>
                <td>${{$d->PriceDiscount}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="" class="btn btn-default">@lang('icon.delete')</a>
                    </div>
                </td>           
            </tr>
            @endisset
            @endforeach
        </tbody>
            <tr>   
                <th></th>
                <th></th>
                <th>@lang('head.total_payment')</th>
                <th>${{$payment->Total}}</th>
            </tr>
            <tr>  
                <th></th>
                <th></th>
                <th>@lang('head.debit')</th>
                <th>${{$payment->Debit}}</th>
            </tr>
    </table>
<div class="row">
    <form action="{{route('payments.update', $payment->id)}}" method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PUT')}}
        <input class="hidden" name="payment_id" value="{{$payment->id}}" id="payment_id">
        <div class="col-sm-1 col-sm-offset-7">
            <label for=""><b>@lang('label.amount')<b></label>
        </div>
        <div class="col-sm-2">
            <input type="text" name="amount" class="form-control">
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-default"> <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> Pagar</button>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script>
    $('#searchitem').click(function(){
        $('#listi').load('{!!route('items.search')!!}',{
            '_token': '{!!csrf_token()!!}',
            'name': $('#name').val()
        });
    });
</script>
<script>
    function getitem()
        {
        $('#listi').load('{!!route('payments.itemdetail')!!}',
            {
            'payment_id': $('#payment_id').val(),
            'item_id': $('#item_id').val(),
            'discount': $('#discount').val(),
            '_token': '{!!csrf_token()!!}'
            },
            function(){
            location.reload();
            });
        }
</script>
@endsection