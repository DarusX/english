@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.classifications')</h1>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.classification')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classifications as $c)
            <tbody>
                <tr>       
                    <td>{{$c->name}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('classifications.destroy', $c->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('classifications.edit', $c->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection