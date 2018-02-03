@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<center><b><h2>Lista de sucursales</h2></b></center>
	</div>
</div><br>
<div class="row">
<div class="col-md-9 col-sm-offset-1">
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th>Sucursal</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        <tr>
    </thead>
    @foreach($sucursales as $sucursal)
    <tbody>
        <tr>       
            <td>{{$sucursal->name}}</td>
            <td>{{$sucursal->address}}</td>
            <td>{{$sucursal->phone}}</td>
            <td><a href="{{route('sucursal.edit',$sucursal->id)}}" title="Editar">
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