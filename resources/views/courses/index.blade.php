@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.courses')</h1>
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
                    <td>{{$c->course}}</td>
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
@endsection