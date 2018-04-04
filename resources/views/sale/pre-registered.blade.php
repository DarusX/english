@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.pre-registered')</h1>
</div>
<div class="col-sm-12">
<a data-toggle="modal" data-target="#create" class="btn btn-default">@lang('icon.create')</a>
<a href="" target="_blank" class="btn btn-default">@lang('icon.print')</a>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.emergency_phone')</th>
                <th>@lang('head.email')</th>
                <th>@lang('head.branch')</th>
                <th>@lang('head.status')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $s)
            <tr>
                <td>{{$s->name}} {{$s->lastname}}</a></td>
                <td>{{$s->emergency_phone}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->branch->name}}</td>
                <td>{{$s->status->status}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="" class="btn btn-default">@lang('icon.delete')</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('sale.modal')
@endsection