@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
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
                            <a href="{{route('lists.show', $c->id)}} " class="btn btn-default">@lang('icon.show')</a>
                            <a href="{{route('report.lista', $c->id)}}" target="_blank" class="btn btn-default">@lang('icon.print')</a>
                            <a href="{{route('lists.destroy', $c->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
