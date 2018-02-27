@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div>
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.course_types')</h1>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.course_type')</th>
                <th>@lang('head.duration')</th>
                <th>@lang('head.information')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $t)
            <tbody>
                <tr>       
                    <td><a href="{{route('course_type.show', $t->id)}}">{{$t->name}}</td>
                    <td>{{$t->duration}}</td>
                    <td>{{$t->information}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('course_type.destroy', $t->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('course_type.edit', $t->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@include('course_type.modal')
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