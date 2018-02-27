@extends('layouts.app') 
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.course_type')</h1>
    <form action="{{route('course_type.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="" class="required">@lang('label.course_type')</label>
            <input class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">@lang('label.duration')</label>
            <input class="form-control" name="duration">
        </div>
        <div class="form-group">
            <label for="">@lang('label.information')</label>
            <input class="form-control" name="information">
        </div>
            <button type="submit" class="btn btn-primary">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection