@extends('layouts.app')
@section('side')
<div class="col-sm-12">
    @include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.professors')</h1>
</div>
<div class="col-sm-12">
<a data-toggle="modal" data-target="#create" class="btn btn-default">@lang('icon.create')</a>
<a href="{{route('report.professor')}}" target="_blank" class="btn btn-default">@lang('icon.print')</a>
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
            @foreach($professors as $p)
            <tr>
                <td><a href="{{route('professors.show', $p->id)}}">{{$p->name}} {{$p->lastname}}</a></td>
                <td>{{$p->matricula}}</td>
                <td>{{$p->mobile}}</td>
                <td>{{$p->phone}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->career}}</td>
                <td>{{$p->address}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="{{route('professors.destroy', $p->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                        <a href="{{route('professors.edit', $p->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div id="grid_here" style="width: 600px; height: 400px;"></div>
@include('professor.modal')
@include('professor.create') 
@endsection
@section('scripts')
<script type="text/javascript" charset="utf-8">
    mygrid = new dhtmlXGridObject('grid_here');
    mygrid.setHeader("name");
    mygrid.init();
    mygrid.load("{{route('professors.ajax')}}", "js");
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