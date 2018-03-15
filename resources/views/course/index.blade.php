@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.courses')</h1>
</div>
<div class="col-sm-12">
<a data-toggle="modal" data-target="#create" class="btn btn-default">@lang('icon.create')</a>
<a href="{{route('report.course')}}" target="_blank" class="btn btn-default">@lang('icon.print')</a>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.course')</th>
                <th>@lang('head.level')</th>
                <th>@lang('head.course_option')</th>
                <th>@lang('head.course_type')</th>
                <th>@lang('head.date')</th>
                <th>@lang('head.schedule')</th>
                <th>@lang('head.classroom')</th>
                <th>@lang('head.professor')</th>
                <th>@lang('head.price')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($courses as $c)
            <tbody>
                <tr>       
                    <td><a href="{{route('courses.show', $c->id)}}">{{$c->course}}</a></td>
                    <td>{{$c->level->level}}</td>
                    <td>{{$c->course_option->name}}</td>
                    <td>{{$c->course_type->name}}</td>
                    <td>{{$c->date}}</td>
                    <td>{{$c->schedule}}</td>
                    <td>{{$c->classroom->number}}</td>
                    <td>{{$c->professor->teacher}}</td>
                    <td>${{$c->price}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('courses.destroy', $c->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('courses.edit', $c->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@include('course.modal')
@include('course.create')
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
