@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.course_classifications')</h1>
</div>
<div class="col-sm-12">
<a href="{{route('classification.lista')}}" target="_blank" class="btn btn-default">@lang('icon.print')</a>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.course_classification')</th>
                <th>@lang('head.actions')</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($classifications as $cl)
            <tbody>
                <tr>       
                    <td>{{$cl->name}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('classifications.destroy', $cl->id)}}" class="btn btn-default">@lang('icon.delete')</a>
                            <a href="{{route('classifications.edit', $cl->id)}}" class="btn btn-default">@lang('icon.edit')</a>
                        </div>
                    </td>
                <tr>
            </tbody>
            @endforeach
        </tbody>
    </table>
</div>
@endsection