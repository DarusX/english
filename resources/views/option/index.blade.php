@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.course_options')</h1>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.course_option')</th>
                <th>@lang('head.classification')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($options as $o)
            <tbody>
                <tr>       
                    <td><a href="{{route('options.show', $o->id)}}">{{$o->name}}</td>
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
@include('option.modal')
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