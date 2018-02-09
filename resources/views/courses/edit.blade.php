@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.course')</h1>
</div>
<div class="col-sm-12"> 
    <form action="{{route('courses.update', $course->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.course')</label>
            <input type="text" class="form-control" name="course" value="{{$course->name}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.coursetype')</label>
            <select name="course_type_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($types as $y)
                @if ($courses->course_type_id==$t->id)
                <option value="{{$t->id}}" selected="selected">{{$t->name}}</option>
                @else
                <option value="{{$t->id}}">{{$t->name}}</option>@endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.courseoption')</label>
            <select name="course_option_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($options as $o)
                @if ($courses->course_option_id==$o->id)
                <option value="{{$o->id}}" selected="selected">{{$o->name}}</option>
                @else
                <option value="{{$o->id}}">{{$o->name}}</option>@endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.level')</label>
            <select name="level_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($levels as $l)
                @if ($courses->level_id==$l->id)
                <option value="{{$l->id}}" selected="selected">{{$l->level}}</option>
                @else
                <option value="{{$l->id}}">{{$l->level}}</option>@endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.start_time')</label>
            <input class="form-control" name="start_time" value="{{$course->start_time}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.finish_time')</label>
            <input class="form-control" name="finish_time" value="{{$course->finish_time}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.start_date')</label>
            <input class="form-control" name="start_date" value="{{$course->start_date}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.finish_date')</label>
            <input class="form-control" name="finish_date" value="{{$course->finish_date}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.classroom')</label>
            <select name="classroom" class="form-control">
                @foreach($classrooms as $c)
                @if ($courses->classroom_id==$c->id)
                <option value="{{$c->id}}" selected="selected">{{$c->number}}</option>
                @else
                <option value="{{$c->id}}">{{$c->number}}</option>@endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.professor')</label>
            <select name="professor_id" class="form-control">
                @foreach($professors as $p)
                @if ($courses->professor_id==$p->id)
                <option value="{{$p->id}}" selected="selected">{{$p->teacher}}</option>
                @else
                <option value="{{$p->id}}">{{$p->teacher}}</option>@endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.branch')</label>
            <select name="branch_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($branches as $b)
                @if ($courses->branch_id==$b->id)
                <option value="{{$b->id}}" selected="selected">{{$b->name}}</option>
                @else
                <option value="{{$b->id}}">{{$b->name}}</option>@endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.price')</label>
            <input type="text" class="form-control" name="price" value="{{$course->name}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection