<div class="col-sm-12"> 
    <form action="{{route('course_classifications.update', $classification->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="">@lang('label.course_classification')</label> 
            <input type="text" class="form-control" name="name" value="{{$classification->name}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
