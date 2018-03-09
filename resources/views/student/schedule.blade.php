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
            <th>@lang('head.professor')</th>         
            <th>@lang('head.actions')</th>
        </tr>
    </thead>
    <tbody>
        @foreach($student->lists as $datos)
        <tr>  
            <td></td>     
            <td>{{$datos->course->course}}</td>
            <td>{{$datos->course->start_date}}</td>
            <td>{{$datos->course->finish_date}}</td>
            <td>{{$datos->course->Schedule}}</td>
            <td>{{$datos->course->classroom->number}}</td>
            <td>{{$datos->course->professor->Teacher}}</td>
            <td></td>  
        </tr>
        @endforeach
    </tbody>
</table>
@endsection