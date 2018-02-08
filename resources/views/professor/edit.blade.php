@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.professor')</h1>
</div>
<div class="col-sm-12">
    <form action="{{route('professors.update', $professor->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{$professor->name}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Apellidos</label>
            <input type="text" name="lastname" class="form-control" value="{{$professor->lastname}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Fecha de nacimiento</label>
            <input type="date" name="birthdate" class="form-control" value="{{$professor->birthdate}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Sexo</label>
            <select name="gender" class="form-control" value="{{$professor->gender}}">
                <option value="M">Maculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="">Carrera</label>
            <input type="text" name="career" class="form-control" value="{{$professor->career}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Cédula</label>
            <input type="text" name="cedula" class="form-control" value="{{$professor->cedula}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">CURP</label>
            <input type="text" name="curp" class="form-control" value="{{$professor->curp}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">RFC</label>
            <input type="text" name="rfc" class="form-control" value="{{$professor->rfc}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Celular</label>
            <input type="text" name="mobile" class="form-control" value="{{$professor->mobile}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Teléfono</label>
            <input type="text" name="phone" class="form-control" value="{{$professor->phone}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Tipo de sangre</label>
            <input type="text" name="blood_type" class="form-control" value="{{$professor->blood_type}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Dirección</label>
            <input type="text" name="address" class="form-control" value="{{$professor->address}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{$professor->email}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Contratado</label>
            <input type="date" name="hired" class="form-control" value="{{$professor->hired}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Despedido</label>
            <input type="date" name="fired" class="form-control" value="{{$professor->fired}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Foto</label>
            <input type="file" name="_photo" class="form-control" >
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>

    </form>
</div>
@endsection