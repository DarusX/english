<div class="modal fade bs-example-modal-lg" id="create" tabindex="-1" role="dialog">
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
                        <form action="{{route('recepcionist.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.name')</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.lastname')</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.birthdate')</label>
                                <input class="form-control datepicker" name="birthdate" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.gender')</label>
                                <select name="gender" class="form-control">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">@lang('label.curp')</label>
                                <input type="text" name="curp" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.mobile')</label>
                                <input type="text" name="mobile" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.phone')</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.emergency_phone')</label>
                                <input type="text" name="emergency_phone" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">@lang('label.blood_type')</label>
                                <input type="text" name="blood_type" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">@lang('label.allergy')</label>
                                <input type="text" name="allergy" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.email')</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.address')</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">@lang('label.comments')</label>
                                <input type="text" name="comment" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">@lang('label.branch')</label>
                                <select name="branch_id" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    @foreach($branches as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">@lang('label.photo')</label>
                                <input type="file" name="_photo" class="form-control">
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
@include('scriptdatepicker')
