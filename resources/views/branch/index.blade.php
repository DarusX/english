@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.branches')</h1>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.branch')</th>
                <th>@lang('head.address')</th>
                <th>@lang('head.phone')</th>
                <th>@lang('head.actions')</th>
            <tr>
        </thead>
        <tbody>
            @foreach($branches as $b)
            <tr>       
                <td><a href="{{route('branches.show', $b->id)}}">{{$b->name}}</td>
                <td>{{$b->address}}</td>
                <td>{{$b->phone}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="{{route('branches.destroy', $b->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                        <a href="{{route('branches.edit', $b->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                    </div>
                </td>
            <tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('branch.modal')
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