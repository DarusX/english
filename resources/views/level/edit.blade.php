@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.level')</h1>
</div>
<div class="col-sm-12">
    <form action="{{route('levels.update', $level->id)}}" method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="">Nivel</label>
            <input class="form-control" name="level" value="{{$level->level}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Información del nivel</label>
            <input class="form-control" name="description" value="{{$level->description}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection