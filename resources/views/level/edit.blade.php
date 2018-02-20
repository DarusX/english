<div class="col-sm-12">
    <form action="{{route('levels.update', $level->id)}}" method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="">@lang('label.level')</label>
            <input class="form-control" name="level" value="{{$level->level}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.description')</label>
            <input class="form-control" name="description" value="{{$level->description}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>