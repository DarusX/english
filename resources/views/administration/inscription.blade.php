<div class="col-sm-12">
    <form action="{{route('administration.storeinscription', $student->id)}}"  method="POST" role="form">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2><center>Inscribir alumno</center></h2>
            </div>
            
        </div><br>
        <input type="hidden" name="student_id" value="{{$student->id}}">
        <input type="hidden" name="status_id" value="2">
        <div class="row">
            <div class="form-group col-sm-4">
                <label for="">@lang('label.name')</label>
                <input class="form-control" name="name" value="{{$student->name}}">
            </div>
            <div class="form-group col-sm-4">
                <label for="">@lang('label.lastname')</label>
                <input class="form-control" name="lastname" value="{{$student->lastname}}">
            </div>
            <div class="form-group col-sm-4">
                <label for="">@lang('label.birthdate')</label>
                <input class="form-control datepicker" name="birthdate" value="{{$student->birthdate}}">
            </div>
        </div>  
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@include('scriptdatepicker')