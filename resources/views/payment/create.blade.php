<div class="modal fade" id="create" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">@lang('title.payment')</h4>
            </div> <!-- Cierre de modal-header -->
            <div class="modal-body">
                <div class="row" id="modalContent">
                    <div class="col-sm-12">
                        <div id="c" class="col-sm-1 col-sm-offset-3">
                            <label for=""><a onclick="showgeneral(1);">@lang('label.courses')</a></label>
                        </div>
                        <div id="i" class="col-sm-1 col-sm-offset-3">
                            <label for=""><a onclick="showgeneral(2);">@lang('label.items')</a></label>
                        </div>
                    </div>
                    <div id="ca" class="col-sm-12" style="display: none;">
                        <div class="input-group col-sm-8 col-sm-offset-2">
                            <input type="text" id="name" class="form-control" placeholder="Alumno">
                            <span class="input-group-btn">
                            <button id="search" class="btn btn-default" title="Buscar" onclick="showgeneral(3);">
                                Go</button>
                            </span> 
                        </div>
                    </div>
                    <div id="ia" class="col-sm-12" style="display: none;">
                        <div class="input-group col-sm-8 col-sm-offset-2">
                            <input type="text" id="name" class="form-control" placeholder="Alumno">
                            <span class="input-group-btn">
                            <button id="search2" class="btn btn-default" title="Buscar" onclick="showgeneral(4);">
                                Go</button>
                            </span> 
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <form action="{{route('payments.store')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="col-sm-6 col-sm-offset-2" id="list">                                
                        </div>
                        <div class="col-sm-2 col-sm-offset-4" id="newca" style="display: none;">
                            <button type="submit" class="btn btn-default"> Pago </button>
                        </div>
                        </form>  
                    </div>
                    <div class="col-sm-12">
                        <form action="{{route('payments.storei')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="col-sm-6 col-sm-offset-2" id="list2">                                
                        </div>
                        <div class="col-sm-2 col-sm-offset-4" id="newia" style="display: none;">
                            <button type="submit" class="btn btn-default"> Pago </button>
                        </div>
                        </form>  
                    </div>       <br>     
                </div> <!-- Cierre row -->
            </div> <!-- Cierre de modal-body -->
        </div> <!-- Cierre de modal-content -->
    </div> <!-- Cierre de modal-dialog -->
</div> <!-- Cierre del modal -->