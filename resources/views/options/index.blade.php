@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.courseoptions')</h1>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.courseoption')</th>
                <th>@lang('head.classification')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($options as $o)
            <tbody>
                <tr>       
                    <td>{{$o->name}}</td>
                    <td>{{$o->classification->name}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('options.destroy', $o->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('options.edit', $o->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection