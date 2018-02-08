@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.courseclassifications')</h1>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.courseclassification')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($classifications as $cl)
            <tbody>
                <tr>       
                    <td>{{$cl->name}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('classifications.destroy', $cl->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('classifications.edit', $cl->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection