@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>Professores</h1>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professors as $p)
            <tr>
                <td><a href="{{route('professors.show', $p->id)}}">{{$p->name}} {{$p->lastname}}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('professor.modal')
@endsection
@section('scripts')
<script>
    $("td a").click(function(event){
        event.preventDefault();
        $("#modalContent").html("<img src='{{asset('img/loading.gif')}}' class='img-responsive' width='content'>");

        $("#modalShow").modal("toggle");
        $.ajax({
            url: $(this).attr("href"),
            success: function(data){
                //$("#modalContent").html(data);
            }
        });
    })
</script>
@endsection