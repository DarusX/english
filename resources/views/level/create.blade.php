<div class="modal fade" id="create" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">@lang('title.level')</h4>
            </div> <!-- Cierre de modal-header -->
            <div class="modal-body">
                <div class="row" id="modalContent">
                    <div class="col-sm-12">
                        <form action="{{route('levels.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="" class="required">@lang('label.level')</label>
                                <input class="form-control" name="level">
                            </div>
                            <div class="form-group">
                                <label for="">@lang('label.description')</label>
                                <input class="form-control" name="description">
                            </div>
                                <button type="submit" class="btn btn-default">@lang('button.save')</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- Cierre row -->
            </div> <!-- Cierre de modal-body -->
        </div> <!-- Cierre de modal-content -->
    </div> <!-- Cierre de modal-dialog -->
</div> <!-- Cierre del modal -->
