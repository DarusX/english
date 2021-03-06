@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-md-10 col-sm-offset-1">
    <table class="table">
        <tbody>
            <tr>
                <td>@lang('head.name')</td>
                <td>{{$datos->name}} {{$datos->lastname}}</td>
            </tr>
            <tr> 
                <td>@lang('head.birthdate')</td>
                <td>{{$datos->birthdate}}</td>
            </tr>
            <tr>
                <td>@lang('head.gender')</td>
                <td>{{$datos->gender}}</td>
            </tr>
            <tr>
                <td>@lang('head.curp')</td>
                <td>{{$datos->curp}}</td>
            </tr>
            <tr>   
                <td>@lang('head.mobile')</td>
                <td>{{$datos->mobile}}</td>
            </tr>
            <tr> 
                <td>@lang('head.phone')</td>
                <td>{{$datos->phone}}</td>
            </tr>
            <tr>
                <td>@lang('head.email')</td>
                <td>{{$datos->email}}</td>
            </tr>
            <tr>
                <td>@lang('head.address')</td>
                <td>{{$datos->address}}</td>
            </tr>
        </tbody>
    </table>   
    <center><div class="btn-group" role="group" aria-label="...">
    <a data-toggle="modal" data-target="#data"  class="btn btn-default">@lang('icon.edit')</a>
    </div></center>
</div>
@include('employee.data')
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
@endsection
