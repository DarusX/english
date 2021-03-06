<div class="col-sm-12">
    <form action="{{route('course_types.update', $type->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="">@lang('label.course_type')</label>
            <input type="text" name="name" class="form-control" value="{{$type->name}}">
        </div>  
        <div class="form-group col-sm-4">
            <label for="">@lang('label.duration')</label>
            <input type="text" name="duration" class="form-control" value="{{$type->duration}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.information')</label>
            <input type="text" name="information" class="form-control" value="{{$type->information}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>

    </form>
</div>
