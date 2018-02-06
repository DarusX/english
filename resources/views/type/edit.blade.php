@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>Tipo de curso</h1>
</div>
<div class="col-sm-12">
    <form action="{{route('types.update', $type->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="">Tipo de curso</label>
            <input type="text" name="name" class="form-control" value="{{$type->name}}">
        </div>  
        <div class="form-group col-sm-4">
            <label for="">Duración</label>
            <input type="text" name="duration" class="form-control" value="{{$type->duration}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Información</label>
            <input type="text" name="information" class="form-control" value="{{$type->information}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">Guardar</button>
        </div>

    </form>
</div>
@endsection