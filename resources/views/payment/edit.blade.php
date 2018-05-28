<div class="col-sm-12">
    <form action="{{route('payments.update', $payment->id)}}" method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="row">
        <div class="col-sm-2">
            <label for="">@lang('label.student')</label>
        </div>
        <div class="col-sm-5">
            <input type="text"  value="{{$payment->student->StudentName}}" class="form-control" disabled>
        </div>
        <div class="col-sm-1 col-sm-offset-1">
            <label for="">@lang('label.date')</label>
        </div>
        <div class="col-sm-3">
            <input type="text"  value="{{$payment->Date}}" class="form-control" disabled>
        </div>
    </div><br>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.item')</th>
                <th>@lang('head.discount')</th>
                <th>@lang('head.price')</th>
                <th>@lang('head.total_price')</th>
                <th></th>
            </tr>
        <tbody>
            @foreach($payment->details as $d)
            @isset($d->item_id)
            <tr>            
                <td>{{$d->item->name}}</td>     
                <td>{{$d->discount}}%</td>
                <td>${{$d->item->price}}</td> 
                <td>${{$d->priceDiscount}}</td>   
                <td></td>         
            </tr>
            @endisset
            @isset($d->course_id)
            <tr>
            
                <td>Curso no. {{$d->course->course}}</td>
                <td>{{$d->discount}}%</td>
                <td>${{$d->course->price}}</td>
                <td>${{$d->PriceDiscount}}</td>           
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
        {{csrf_field()}}
        <input class="hidden" name="payment_id" value="{{$payment->id}}" id="payment_id">
        <div class="col-sm-2 col-sm-offset-3">
            <label for=""><b>@lang('label.amount')<b></label>
        </div>
        <div class="col-sm-3">
            <input type="text" name="amount" class="form-control">
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-default"> <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> Pagar</button>
        </div>
    </div>
    </form>
</div>
