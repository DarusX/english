@extends('layouts.app') 
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.course')</h1>
    <form action="{{route('courses.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.course')</label>
            <input type="text" class="form-control" name="course">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.course_type')</label>
            <select name="course_type_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($types as $t)
                <option value="{{$t->id}}">{{$t->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.course_option')</label>
            <select name="course_option_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($options as $o)
                <option value="{{$o->id}}">{{$o->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.level')</label>
            <select name="level_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($levels as $l)
                <option value="{{$l->id}}">{{$l->level}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.start_time')</label>
            <input class="form-control" name="start_time">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.finish_time')</label>
            <input class="form-control" name="finish_time">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.start_date')</label>
            <input class="form-control datepicker" name="start_date">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.finish_date')</label>
            <input class="form-control datepicker" name="finish_date">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.classroom')</label>
            <select name="classroom_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($classrooms as $c)
                <option value="{{$c->id}}">{{$c->number}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.professor')</label>
            <select name="professor_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($professors as $p)
                <option value="{{$p->id}}">{{$p->teacher}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.branch')</label>
            <select name="branch_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($branches as $b)
                <option value="{{$b->id}}">{{$b->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.price')</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-primary">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection
@section('scripts')
    @include('scriptdatepicker')
@endsection