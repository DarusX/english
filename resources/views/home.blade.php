@extends('layouts.app')

@section('content')
<div class="col-sm-12">
<table class="table">
        <tbody>
            <tr>
                <td>@lang('head.name')</td>
                <td>{{$datos->name}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
