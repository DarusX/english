@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1 class="title">{{$user->name}}</h1>
</div>
<div class="col-sm-12">
    <h2 class="title">Permisos</h2>
    <form action="{{route('roles.update', $user->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @foreach($roles as $r)
        <div class="checkbox">
            <label for="">
                <input type="checkbox" name="role_id[]" value="{{$r->id}}"> {{$r->name}}
            </label>
        </div>
        @endforeach
        <button type="submit" class="btn btn-default">@lang('button.save')</button>
    </form>
</div>
@endsection
@section('scripts')
<script>
@foreach($user->roles as $r)
$("input[value='{{$r->id}}']").prop("checked", true);
@endforeach
</script>
@endsection