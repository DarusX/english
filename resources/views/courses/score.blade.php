<div class="col-sm-1">
    @lang('head.course'):
</div>
<div class="col-sm-2">
        <input type="text" value="{{$list->course->course}}" class="form-control" disabled>
</div>
<div class="col-sm-2">
    @lang('head.name'):
</div>
<div class="col-sm-5">
        <input type="text"  value="{{$list->student->StudentName}}" class="form-control" disabled>
</div>
<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{route('courses.storeScore', $list->id)}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="form-group col-sm-4">
                    <label for="">@lang('label.oral_exam')</label>
                    <input type="text" name="oral_exam" value="{{$list->oral_exam}}" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">@lang('label.written_exam')</label>
                    <input type="text" name="written_exam" value="{{$list->written_exam}}" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">@lang('label.homework')</label>
                    <input type="text" name="homework" value="{{$list->homework}}" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">@lang('label.attendance')</label>
                    <input type="text" name="attendance" value="{{$list->attendance}}" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">@lang('label.comments')</label>
                    <input type="text" name="comment" value="{{$list->comment}}" class="form-control">
                </div>
                <div class="form-group col-sm-4"><br>
                    <button type="submit" class="btn btn-default">@lang('button.save')</button>
                </div>
            </form>
        </div>
    </div>
</div>
