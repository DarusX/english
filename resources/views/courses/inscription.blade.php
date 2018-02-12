@extends('layouts.app')
@section('content')
<br>
<div class="form-group col-sm-4">
    <input type="text" id="name" class="form-control" placeholder="Inscribir alumno">
</div>
<div class="form-group col-sm-4">
    <button type="button" id="buscaralumno" onclick="mostrar();" class="btn btn-default" title="Buscar">
    <i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
</div>
<form action="" method="POST" role="form">
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