@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.courseclassification')</h1>
</div>
<div class="col-sm-12"> 
    <form action="{{route('classifications.update', $classification->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="">@lang('label.courseclassification')</label> 
            <input type="text" class="form-control" name="name" value="{{$classification->name}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection