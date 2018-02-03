@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-7 col-sm-offset-2">
    <legend><h2><center>Modificar datos</center></h2></legend>
    </div>
</div>
<div class="col-sm-12">
<form action="{{route('sucursal.update', $sucursal->id)}}" method="POST" role="form">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
            <label for="">Nombre de la sucursal</label>
            <input class="form-control" name="name" value="{{$sucursal->name}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
            <label for="">Dirección</label>
            <input class="form-control" name="address" value="{{$sucursal->address}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
            <label for="">Teléfono</label>
            <input class="form-control" name="phone" value="{{$sucursal->phone}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> 
        Guardar</button>
        <a href="{{route('sucursal.index')}}" class="btn btn-danger">
        <i class="fa fa-undo fa-lg" aria-hidden="true"></i> Regresar</a>
    </div>
</div>
</form>
</div>
@endsection