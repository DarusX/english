<div class="modal fade" id="data" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">@lang('title.employee')</h4>
            </div>
            <div class="modal-body">
                <div class="row" id="modalContent">
                    <div class="col-sm-12">
                        <form action="{{route('employee.update')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group col-sm-6">
                                <label for="" class="required">@lang('label.name')</label>
                                <input type="text" name="name" class="form-control" value="{{$datos->name}}" disabled>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="" class="required">@lang('label.lastname')</label>
                                <input type="text" name="lastname" class="form-control" value="{{$datos->lastname}}" disabled>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="" class="required">@lang('label.mobile')</label>
                                <input type="text" name="mobile" class="form-control" value="{{$datos->mobile}}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="" class="required">@lang('label.phone')</label>
                                <input type="text" name="phone" class="form-control" value="{{$datos->phone}}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="" class="required">@lang('label.address')</label>
                                <input type="text" name="address" class="form-control" value="{{$datos->address}}">
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
