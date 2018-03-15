@extends('layouts.app')
@section('side')
<div class="col-sm-12">
    @include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.employees')</h1>
</div>
<div class="col-sm-12">
<a data-toggle="modal" data-target="#create" class="btn btn-default">@lang('icon.create')</a>
<a href="{{route('report.employee')}}" target="_blank" class="btn btn-default">@lang('icon.print')</a>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.id')</th>
                <th>@lang('head.mobile')</th>
                <th>@lang('head.phone')</th>
                <th>@lang('head.email')</th>
                <th>@lang('head.career')</th>
                <th>@lang('head.address')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $e)
            <tr>
                <td><a href="{{route('employees.show', $e->id)}}">{{$e->name}} {{$e->lastname}}</a></td>
                <td>{{$e->matricula}}</td>
                <td>{{$e->mobile}}</td>
                <td>{{$e->phone}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->career}}</td>
                <td>{{$e->address}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="{{route('employees.destroy', $e->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                        <a href="{{route('employees.edit', $e->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('employee.modal')
@include('employee.create')
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