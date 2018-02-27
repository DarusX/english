@extends('layouts.app') 
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.level')</h1>
    <form action="{{route('levels.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="" class="required">@lang('label.level')</label>
            <input class="form-control" name="level">
        </div>
        <div class="form-group">
            <label for="">@lang('label.description')</label>
            <input class="form-control" name="description">
        </div>
            <button type="submit" class="btn btn-primary">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection