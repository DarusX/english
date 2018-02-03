@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<center><b><h2>Lista de niveles de inglés</h2></b></center>
	</div>
</div><br>
<div class="row">
<div class="col-md-7 col-sm-offset-2">
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th>Nivel</th>
            <th>Información</th>
            <th>Acciones</th>
        <tr>
    </thead>
    @foreach($niveles as $nivel)
    <tbody>
        <tr>       
            <td>{{$nivel->number}}</td>
            <td>{{$nivel->information}}</td>
            <td><a href="{{route('level.edit',$nivel->id)}}" title="Editar">
            <i class="fa fa-pencil fa-lg" aria-hidden="true" style="color:green"></i></a>
            <a href="" title="Eliminar" onclick="
            return confirm('¿Deseas eliminar este registro?')">
            <i class="fa fa-trash-o fa-lg" aria-hidden="true" style="color:red"></i></a></td>
        <tr>
    </tbody>
    @endforeach
</table>
</div>
</div><br>
@endsection