@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
    <h1><center>Modificar datos</center></h1>
    </div>
</div>
<div class="col-sm-12">
<form action="{{route('option.update', $option->id)}}" method="POST" role="form">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="row">
    <div class="form-group col-sm-4">
            <label for="">Opción de curso</label>
            <input class="form-control" name="name" value="{{option->name}}">
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
</div>
<div class="row">
    <div class="col-sm-12">
        <center><button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> 
        Guardar</button>
        <a href="{{route('option.index')}}" class="btn btn-danger">
        <i class="fa fa-undo fa-lg" aria-hidden="true"></i> Regresar</a></center>
    </div>
</div>
</form>
</div>
@endsection