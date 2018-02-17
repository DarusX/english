@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.items')</h1>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.price')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $i)
            <tbody>
                <tr>       
                    <td>{{$i->name}}</td>
                    <td>{{$i->price}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('items.destroy', $i->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('items.edit', $i->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection