@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.levels')</h1>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.level')</th>
                <th>@lang('head.description')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($levels as $l)
            <tbody>
                <tr>       
                    <td>{{$l->level}}</td>
                    <td>{{$l->description}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('levels.destroy', $l->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('levels.edit', $l->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection