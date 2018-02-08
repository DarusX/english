@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.coursetypes')</h1>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.coursetype')</th>
                <th>@lang('head.duration')</th>
                <th>@lang('head.information')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $t)
            <tbody>
                <tr>       
                    <td>{{$t->name}}</td>
                    <td>{{$t->duration}}</td>
                    <td>{{$t->information}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('course_type.destroy', $t->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('course_type.edit', $t->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection