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
                <td><a href="{{route('professors.edit', $p->id)}}">{{$p->name}} {{$p->lastname}}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection