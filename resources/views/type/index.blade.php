@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.coursetype')</h1>
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
                            <a href="{{route('types.destroy', $t->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('types.edit', $t->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection