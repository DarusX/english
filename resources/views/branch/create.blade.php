@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.branch')</h1>
    <form action="{{route('branches.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="" class="required">@lang('label.name')</label>
            <input class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="" class="required">@lang('label.address')</label>
            <input class="form-control" name="address">
        </div>
        <div class="form-group">
            <label for="" class="required">@lang('label.phone')</label>
            <input class="form-control" name="phone">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection