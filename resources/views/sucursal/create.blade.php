@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
    <h1><center>Registro de sucursal</center></h1>
    </div>
</div>
<div class="col-sm-12">
    <form action="{{route('sucursal.store')}}" method="POST" role="form">
    {{csrf_field()}}
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <label for="">Nombre de la sucursal</label>
                    <input class="form-control" name="name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <label for="">Dirección</label>
                    <input class="form-control" name="address">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <label for="">Teléfono</label>
                    <input class="form-control" name="phone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center>
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> 
                Guardar</button>
                <a href="{{route('sucursal.index')}}" class="btn btn-danger">
                <i class="fa fa-undo fa-lg" aria-hidden="true"></i>Regresar</a></center>
            </div>
        </div>
    </form>
</div>
@endsection