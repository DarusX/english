@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
	<center><h3>@lang('title.report_cards')</h3></center>
</div>
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th></th>
            <th>@lang('head.course')</th>
            <th>@lang('head.oral_exam')</th>
            <th>@lang('head.written_exam')</th>
            <th>@lang('head.homework')</th>
            <th>@lang('head.attendance')</th>
            <th>@lang('head.total')</th>
            <th>@lang('head.comments')</th>         
            <th>@lang('head.actions')</th>
        </tr>
    </thead>
    <tbody>
        @foreach($student->lists as $datos)
        <tr>  
            <td></td>     
            <td>{{$datos->course->course}}</td>
            <td>{{$datos->oral_exam}}</td>
            <td>{{$datos->written_exam}}</td>
            <td>{{$datos->homework}}</td>
            <td>{{$datos->attendance}}</td>
            <td>{{$datos->totalScore}}</td>
            <td>{{$datos->comment}}</td>
            <td></td>       
        </tr>
        @endforeach
    </tbody>
</table>
@endsection