@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
    <h1><center>Registro de niveles</center></h1>
    </div>
</div>
<div class="col-sm-12">
<form action="{{route('level.store')}}" method="POST" role="form">
{{csrf_field()}}
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
            <label for="">Nivel</label>
            <input class="form-control" name="level">
            <span style="color:red;"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
            <label for="">Información del nivel</label>
            <input class="form-control" name="information">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <center><button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> 
        Guardar</button>
        <a href="{{route('level.index')}}" class="btn btn-danger">
        <i class="fa fa-undo fa-lg" aria-hidden="true"></i> Regresar</a></center>
    </div>
</div>
</form>
</div>
@endsection