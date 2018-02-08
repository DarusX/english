@extends('layouts.app')
@section('content')
<div class="col-sm-12">
<h1>@lang('title.courseoption')</h1>
</div>
<div class="col-sm-12">
<form action="{{route('options.update', $option->id)}}" method="POST" role="form">
{{csrf_field()}}
{{method_field('PUT')}}
    <div class="form-group col-sm-4">
            <label for="">Opción de curso</label>
            <input class="form-control" name="name" value="{{$option->name}}">
    </div>
    <div class="form-group col-sm-4">
        <label for="" class="required">@lang('label.classification')</label>
        <select name="classification_id" class="form-control">
            <option value="">-Seleccione-</option>
            @foreach($classifications as $c)
            @if ($option->classification_id==$c->id)
            <option value="{{$c->id}}" selected="selected">{{$c->name}}</option>
            @else
            <option value="{{$c->id}}">{{$c->name}}</option>@endif
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-default">@lang('button.save')</button>
    </div>
</form>
</div>
@endsection