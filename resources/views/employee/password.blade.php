@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
@if (Session::has('message'))
 <div class="text-danger">
 {{Session::get('message')}}
 </div>
@endif
<div class="col-sm-12">
    <h1>@lang('title.update')</h1>
</div>
<div class="col-sm-12">
    <form action="{{route('employee.updatepassword')}}" method="post">
        {{csrf_field()}}
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.old_password')</label>
            <input type="password" name="mypassword" class="form-control">
            <div class="text-danger">{{$errors->first('mypassword')}}</div>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.new_password')</label>
            <input type="password" name="password" class="form-control">
            <div class="text-danger">{{$errors->first('password')}}</div>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.repeat_password')</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection