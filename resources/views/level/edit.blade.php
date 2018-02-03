@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
    <h1><center>Modificar datos</center></h1>
    </div>
</div>
<div class="col-sm-12">
<form action="{{route('level.update', $nivel->id)}}" method="POST" role="form">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
            <label for="">Nivel</label>
            <input class="form-control" name="level" value="{{$nivel->level}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
            <label for="">Información del nivel</label>
            <input class="form-control" name="information" value="{{$nivel->information}}">
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