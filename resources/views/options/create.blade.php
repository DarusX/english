@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.option')</h1>
    <form action="{{route('options.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="" class="required">@lang('label.option')</label>
            <input class="form-control" name="name">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.classification')</label>
            <select name="classification_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($classifications as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
        </div>
            <button type="submit" class="btn btn-primary">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection