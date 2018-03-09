@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
	<center><h3>@lang('title.schedule')</h3></center>
</div>
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th></th>
            <th>@lang('head.course')</th>
            <th>@lang('head.start_date')</th>
            <th>@lang('head.finish_date')</th>
            <th>@lang('head.schedule')</th>
            <th>@lang('head.classroom')</th>        
            <th>@lang('head.actions')</th>
        </tr>
    </thead>
    <tbody>
        @foreach($professor->courses as $datos)
        <tr>  
            <td></td>     
            <td>{{$datos->course}}</td>
            <td>{{$datos->start_date}}</td>
            <td>{{$datos->finish_date}}</td>
            <td>{{$datos->Schedule}}</td>
            <td>{{$datos->classroom->number}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{route('professors.list', $datos->id)}}" class="btn btn-default">@lang('icon.show')</a>
                    <a href="{{route('report.lista', $datos->id)}}" target="_blank" class="btn btn-default">@lang('icon.print')</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection