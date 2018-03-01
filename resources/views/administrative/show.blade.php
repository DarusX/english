@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>Información completa</h1>
</div>
<div class="col-md-12">
    <table class="table table-bordered table-condensed">
    <tbody>
        <tr>       
            <td>@lang('head.course')</td>
            <td>{{$course->course}}</a></td>
        <tr>
        <tr>       
            <td>@lang('head.level')</td>
            <td>{{$course->level->level}}</td>
        <tr>
        <tr>       
            <td>@lang('head.course_type')</td>
            <td>{{$course->course_type->name}}</td>
        <tr>
        <tr>       
            <td>@lang('head.course_option')</td>
            <td>{{$course->course_option->name}}</td>
        <tr>
        <tr>       
            <td>@lang('head.date')</td>
            <td>{{$course->Date}}</td>
        <tr>
        <tr>       
            <td>@lang('head.schedule')</td>
            <td>{{$course->Schedule}}</td>
        <tr>
        <tr>       
            <td>@lang('head.classroom')</td>
            <td>{{$course->classroom->number}}</td>
        <tr>
        <tr>       
            <td>@lang('head.professor')</td>
            <td>{{$course->professor->teacher}}</td>
        <tr>
        <tr>       
            <td>@lang('head.branch')</td>
            <td>{{$course->branch->name}}</td>
        <tr>
        <tr>       
            <td>@lang('head.price')</td>
            <td>${{$course->price}}</td>
        <tr>
    </tbody>
    </table>    
</div> 
<br>
<div class="col-sm-12">
	    <center><h3>@lang('title.students')</h3></center>
</div>
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th>@lang('head.name')</th>
            <th>@lang('head.id')</th>
            <th>@lang('head.status')</th>
        </tr>
        @foreach($course->lists as $list)
        <tr>    
            <td>{{$list->student->studentName}}</td>
            <td>{{$list->student->matricula}}</td>
            <td>{{$list->student->status->status}}</td>
        </tr>
    @endforeach
    </thead>
</table>
@endsection