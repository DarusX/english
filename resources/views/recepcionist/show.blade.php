@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>Información completa</h1>
</div>
<div class="col-md-12">
    <table class="table table-bordered table-condensed">
    <tbody>
        <tr>       
            <td>@lang('head.course')</td>
            <td>{{$course->course}}</a></td>
        <tr>
        <tr>       
            <td>@lang('head.level')</td>
            <td>{{$course->level->level}}</td>
        <tr>
        <tr>       
            <td>@lang('head.course_type')</td>
            <td>{{$course->course_type->name}}</td>
        <tr>
        <tr>       
            <td>@lang('head.course_option')</td>
            <td>{{$course->course_option->name}}</td>
        <tr>
        <tr>       
            <td>@lang('head.date')</td>
            <td>{{$course->Date}}</td>
        <tr>
        <tr>       
            <td>@lang('head.schedule')</td>
            <td>{{$course->Schedule}}</td>
        <tr>
        <tr>       
            <td>@lang('head.classroom')</td>
            <td>{{$course->classroom->number}}</td>
        <tr>
        <tr>       
            <td>@lang('head.professor')</td>
            <td>{{$course->professor->teacher}}</td>
        <tr>
        <tr>       
            <td>@lang('head.branch')</td>
            <td>{{$course->branch->name}}</td>
        <tr>
        <tr>       
            <td>@lang('head.price')</td>
            <td>${{$course->price}}</td>
        <tr>
    </tbody>
    </table>    
</div> 
<br>
<div class="form-group col-sm-4">
    <input type="text" id="name" class="form-control" placeholder="Inscribir alumno">
</div>
<div class="form-group col-sm-1">
    <button type="button" id="buscaralumno" onclick="mostrar();" class="btn btn-default" title="Buscar">
    <i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
</div>
<form action="{{route('lists.store')}}" method="POST" role="form">
    {{csrf_field()}}
    <input class="hidden" name="course_id" value="{{$course->id}}">
    <div id="listaalumno">
    </div>
    <div id="listanuevo" style="display: none;">
        <button type="submit" class="btn btn-primary" title="Inscribir">
        <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> Inscribir
        </button>
    </div>
</form>
<div class="col-sm-12">
	    <center><h3>@lang('title.students')</h3></center>
</div>
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th></th>
            <th>@lang('head.name')</th>
            <th>@lang('head.id')</th>
        </tr>
        @foreach($course->lists as $list)
        <tr>  
            <td></td>     
            <td>{{$list->student->studentName}}</td>
            <td>{{$list->student->matricula}}</td>
            <td>
            </td>
        </tr>
    @endforeach
    </thead>
</table>
@include('list.modal')
@endsection
@section('scripts')
<script>
    function mostrar(){
    var div = document.getElementById('listanuevo');
    div.style.display = "block";
}
</script>
<script>
    $('#buscaralumno').click(function(){
        $('#listaalumno').load('{!!route('students.search')!!}',{
            '_token': '{!!csrf_token()!!}',
            'name': $('#name').val()
        });
    });
</script>
@endsection