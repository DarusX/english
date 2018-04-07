@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.payments')</h1>
</div>
<div class="col-sm-12">
<a data-toggle="modal" data-target="#create" class="btn btn-default">@lang('icon.create')</a>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.folio')</th>
                <th>@lang('head.date')</th>
                <th>@lang('head.student')</th>
                <th>@lang('head.total')</th>
                <th>@lang('head.amount')</th>
                <th>@lang('head.debit')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $p)
            <tbody>
                <tr>       
                    <td><a href="{{route('payments.show', $p->id)}}">{{$p->id}}</td>
                    <td>${{$p->created_at}}</td>
                    <td>${{$p->student->StudentName}}</td>
                    <td>${{$p->total}}</td>
                    <td>${{$p->amount}}</td>
                    <td>${{$p->debit}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('payments.destroy', $p->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('payments.edit', $p->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
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