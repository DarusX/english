@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.professor')</h1>
    <form action="{{route('professors.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.name')</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.lastname')</label>
            <input type="text" name="lastname" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.birthdate')</label>
            <input class="form-control datepicker" name="birthdate" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.gender')</label>
            <select name="gender" class="form-control">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.career')</label>
            <input type="text" name="career" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.cedula')</label>
            <input type="text" name="cedula" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.curp')</label>
            <input type="text" name="curp" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.rfc')</label>
            <input type="text" name="rfc" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.mobile')</label>
            <input type="text" name="mobile" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.phone')</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.blood_type')</label>
            <input type="text" name="blood_type" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.address')</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.email')</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.hired')</label>
            <input type="date" name="hired" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.fired')</label>
            <input type="date" name="fired" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.photo')</label>
            <input type="file" name="_photo" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection
@section('scripts')
    @include('scriptdatepicker')
@endsection