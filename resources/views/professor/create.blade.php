@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>Profesor</h1>
    <form action="{{route('professors.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group col-sm-4">
            <label for="" class="required">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">Apellidos</label>
            <input type="text" name="lastname" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">Fecha de nacimiento</label>
            <input type="date" name="birthdate" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">Sexo</label>
            <select name="gender" class="form-control">
                <option value="M">Maculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="">Carrera</label>
            <input type="text" name="career" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Cédula</label>
            <input type="text" name="cedula" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">CURP</label>
            <input type="text" name="curp" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">RFC</label>
            <input type="text" name="rfc" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">Celular</label>
            <input type="text" name="mobile" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">Teléfono</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Tipo de sangre</label>
            <input type="text" name="blood_type" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">Dirección</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Contratado</label>
            <input type="date" name="hired" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Despedido</label>
            <input type="date" name="fired" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Foto</label>
            <input type="file" name="_photo" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">Guardar</button>
        </div>

    </form>
</div>
@endsection