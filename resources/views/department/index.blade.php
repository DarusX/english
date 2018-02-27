@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
	<div class="col-md-12">
		<h1>@lang('title.departments')</h1>
	</div>
    <table class="table">
    <thead>
        <tr>
            <th>@lang('head.department')</th>
            <th>@lang('head.abbreviation')</th>
            <th>@lang('head.actions')</th>
        </tr>
    </thead>
    <tbody> 
        @foreach($departments as $d)
        <tbody>
            <tr>       
                <td>{{$d->name}}</td>
                <td>{{$d->abbreviation}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="{{route('departments.edit', $d->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                    </div>
                </td>
            <tr>
        </tbody>
        @endforeach
    </tbody>
</table>
</div>
@endsection