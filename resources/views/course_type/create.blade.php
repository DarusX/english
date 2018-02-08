@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.coursetype')</h1>
    <form action="{{route('course_type.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="" class="required">@lang('label.name')</label>
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