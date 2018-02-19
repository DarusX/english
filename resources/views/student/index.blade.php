@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.students')</h1>
</div>
<div class="col-sm-12">
<a href="{{route('student.lista')}}" target="_blank" class="btn btn-default">@lang('icon.print')</a>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.mobile')</th>
                <th>@lang('head.phone')</th>
                <th>@lang('head.emergency_phone')</th>
                <th>@lang('head.address')</th>
                <th>@lang('head.email')</th>
                <th>@lang('head.branch')</th>
                <th>@lang('head.status')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $s)
            <tr>
                <td><a href="{{route('students.show', $s->id)}}">{{$s->name}} {{$s->lastname}}</a></td>
                <td>{{$s->mobile}}</td>
                <td>{{$s->phone}}</td>
                <td>{{$s->emergency_phone}}</td>
                <td>{{$s->address}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->branch->name}}</td>
                <td>{{$s->status->status}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="{{route('students.destroy', $s->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                        <a href="{{route('students.edit', $s->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div id="grid_here" style="width: 600px; height: 400px;"></div>
@include('student.modal')
@endsection
@section('scripts')
<script type="text/javascript" charset="utf-8">
    mygrid = new dhtmlXGridObject('grid_here');
    mygrid.setHeader("name");
    mygrid.init();
    mygrid.load("{{route('students.ajax')}}", "js");
    var dp = new dataProcessor("./grid_data");
    dp.init(mygrid);
</script>
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