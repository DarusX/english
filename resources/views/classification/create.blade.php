@extends('layouts.app') 
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.course_classification')</h1>
    <form action="{{route('classifications.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="" class="required">@lang('label.course_classification')</label>
            <input class="form-control" name="name">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-primary">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection