<div class="modal fade bs-example-modal-lg" id="modalShow" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">@lang('title.student')</h4>
            </div>
            <div class="modal-body">
                <div class="row" id="modalContent">
                    <div class="col-sm-12">
                        <form action="{{route('administrative.storeinscription', $student->id)}}"  method="POST" role="form">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <h2><center>Inscribir alumno</center></h2>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1">
                                    <input type="text" value="{{$date}}" class="form-control" disabled>
                                </div>
                            </div><br>
                            <input type="hidden" name="student_id" value="{{$student->id}}">
                            <input type="hidden" name="status_id" value="{{$student->status_id=2}}">
                            <input type="hidden" name="registration_date" value="{{$date2}}"/>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="">@lang('label.name')</label>
                                    <input class="form-control" value="{{$student->name}}" disabled>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">@lang('label.lastname')</label>
                                    <input class="form-control" value="{{$student->lastname}}" disabled>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">@lang('label.birthdate')</label>
                                    <input class="form-control" value="{{$student->birthdate}}" disabled>
                                </div>
                            </div>  
                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-default">@lang('button.save')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>