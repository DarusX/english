@extends('layouts.app')
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
<div class="row">
	    <center><h3>@lang('title.students')</h3></center>
</div>
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th></th>
            <th>@lang('head.name')</th>
            <th>@lang('head.oral_exam')</th>
            <th>@lang('head.written_exam')</th>
            <th>@lang('head.homework')</th>
            <th>@lang('head.attendance')</th>
            <th>@lang('head.comments')</th>
            <th>@lang('head.actions')</th>
        <tr>
        @foreach($course->lists as $list)
        <tr>  
            <td></td>     
            <td>{{$list->student->studentName}}</td>
            <td>{{$list->oral_exam}}</td>
            <td>{{$list->written_exam}}</td>
            <td>{{$list->homework}}</td>
            <td>{{$list->attendance}}</td>
            <td>{{$list->comment}}</td>
            <td>
            <a href="{{route('courses.score', $list->id)}}" class="btn btn-default">@lang('icon.edit')</a>
            </td>
        <tr>
    @endforeach
    </thead>
</table>
@include('courses.modal')
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