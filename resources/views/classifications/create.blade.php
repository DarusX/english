@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.courseclassification')</h1>
    <form action="{{route('classifications.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="" class="required">@lang('label.courseclassification')</label>
            <input class="form-control" name="name">
        </div>
            <button type="submit" class="btn btn-primary">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection