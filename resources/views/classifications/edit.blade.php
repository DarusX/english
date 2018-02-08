@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
    <h1><center>Modificar datos</center></h1>
    </div>
</div>
<div class="col-sm-12">
<form action="{{route('classification.update', $classification->id)}}" method="POST" role="form">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="row">
        <div class="form-group">
            <label for="">Nivel</label>
            <input class="form-control" name="name" value="{{classification->name}}">
        </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <center><button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> 
        Guardar</button>
        <a href="{{route('classification.index')}}" class="btn btn-danger">
        <i class="fa fa-undo fa-lg" aria-hidden="true"></i> Regresar</a></center>
    </div>
</div>
</form>
</div>
@endsection