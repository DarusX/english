@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.students')</h1>
</div>
<div class="col-sm-12">
<a href="" target="_blank" class="btn btn-default">@lang('icon.print')</a>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.id')</th>
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
                <td>{{$s->matricula}}</td>
                <td>{{$s->phone}}</td>
                <td>{{$s->emergency_phone}}</td>
                <td>{{$s->address}}</td>
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
@include('student.modal')
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