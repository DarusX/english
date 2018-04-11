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
<div class="row" id="cg">
    <div class="col-sm-1 col-sm-offset-3">
        <label for=""><a onclick="showC();">@lang('label.courses')</a></label>
    </div>
    <div id="c" style="display: none;">
    <div class="col-sm-3">
        <input type="text" id="course" class="form-control">
    </div>
    <div class="col-sm-1">
        <button type="button" id="searchcourse" class="btn btn-default" title="Buscar">
        <i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
    </div>
    </div>
</div>
<div class="row">
    <div id="i" class="col-sm-1 col-sm-offset-3">
        <label for=""><a onclick="showC();">@lang('label.items')</a></label>
    </div>
    <div style="display: none;">
    <div class="col-sm-3">
        <input type="text" id="concepto" class="form-control">
    </div>
    <div class="col-sm-1">
        <button type="button" id="buscarconcep" class="btn btn-default" title="Buscar">
        <i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
    </div>
    </div>
</div>
<div class="row>">
    <div class="col-sm-10 col-sm-offset-1" id="listc">
    </div>  
    <div class="col-sm-6" id="listaconcep">
    </div>
</div>
    <table id="table" class="table" style="display: none;">
        <thead>
            <tr>
                <th>Item</th>
                <th>Discount</th>
                <th>Price</th>
                <th>Total_price</th>
                <th></th>
            </tr>
        <tbody>
            @foreach($payment->details as $d)
            @isset($d->item_id)
            <tr>            
                <td>{{$d->name}}</td>     
                <td>{{$d->discount}}%</td>
                <td>${{$d->price}}</td> 
                <td>${{$d->priceDiscount}}</td>          
            </tr>
            @endisset
            @isset($d->course_id)
            <tr>
            
                <td>Curso no. {{$d->course->CourseP}}</td>
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
                <th>Total a pagar</th>
                <th>${{$payment->Total}}</th>
            </tr>
            <tr>  
                <th></th>
                <th></th>
                <th>Resta</th>
                <th>${{$payment->Debit}}</th>
            </tr>
    </table>
@endsection
@section('scripts')
<script>
    $("td a").click(function(event){
        event.preventDefault();
        $("#modalContent").html("<img src='{{asset('img/loading.gif')}}' class='img-responsive' width='content'>");

        $("#modalShow").modal("toggle");
        $.ajax({
            url: $(this).attr("href"),
            success: function(data){
                $("#modalContent").html(data);
            }
        });
    })
</script>
<script>
    function showC(){
    var div = document.getElementById('c');
    div.style.display = "block";    
    var div = document.getElementById('i');
    div.style.display = "none";  
    }
</script>
<script>
    $('#searchcourse').click(function(){
        $('#listc').load('{!!route('courses.search')!!}',{
            '_token': '{!!csrf_token()!!}',
            'course': $('#course').val()
        });
    });
</script>
<script>
    function getcourse()
        {
        $('#listc').load('{!!route('payments.detail')!!}',
            {
            'payment_id': $('#payment_id').val(),
            'course_id': $('#course_id').val(),
            'discount': $('#discount').val(),
            '_token': '{!!csrf_token()!!}'
            },
            function(){
            location.reload();
            });
            var div = document.getElementById('table');
            div.style.display = "block";  
            var div = document.getElementById('cg');
            div.style.display = "none"; 
        }
</script>
@endsection