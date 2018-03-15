<div class="modal fade" id="create" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">@lang('title.branch')</h4>
            </div> <!-- Cierre de modal-header -->
            <div class="modal-body">
                <div class="row" id="modalContent">
                    <div class="col-sm-12">
                        <form action="{{route('branches.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="" class="required">@lang('label.name')</label>
                                <input class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="" class="required">@lang('label.address')</label>
                                <input class="form-control" name="address">
                            </div>
                            <div class="form-group">
                                <label for="" class="required">@lang('label.phone')</label>
                                <input class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">@lang('button.save')</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- Cierre row -->
            </div> <!-- Cierre de modal-body -->
        </div> <!-- Cierre de modal-content -->
    </div> <!-- Cierre de modal-dialog -->
</div> <!-- Cierre del modal -->