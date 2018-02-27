@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
	<center><h3>@lang('title.students')</h3></center>
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
        <tr>
        <tr>  
            <td></td>     
            <td>{{$datos->lists->course->course}}</td>
            <td>{{$datos->lists->oral_exam}}</td>
            <td>{{$datos->lists->written_exam}}</td>
            <td>{{$datos->lists->homework}}</td>
            <td>{{$datos->lists->attendance}}</td>
            <td>{{$datos->lists->totalScore}}</td>
            <td>{{$datos->lists->comment}}</td>
            <td>
            </td>
        <tr>
    </thead>
</table>
@endsection