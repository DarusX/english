@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.item')</h1>
</div>
<div class="col-sm-12">
    <form action="{{route('items.update', $item->id)}}" method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="">@lang('label.level')</label>
            <input class="form-control" name="name" value="{{$item->name}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.description')</label>
            <input class="form-control" name="description" value="{{$item->price}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection