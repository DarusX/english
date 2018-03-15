<div class="modal fade bs-example-modal-lg" id="create" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">@lang('title.course')</h4>
            </div> <!-- Cierre de modal-header -->
            <div class="modal-body">
                <div class="row" id="modalContent">
                    <div class="col-sm-12">
                        <form action="{{route('courses.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.course')</label>
                                <input type="text" class="form-control" name="course">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.course_type')</label>
                                <select name="course_type_id" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    @foreach($types as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.course_option')</label>
                                <select name="course_option_id" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    @foreach($options as $o)
                                    <option value="{{$o->id}}">{{$o->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.level')</label>
                                <select name="level_id" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    @foreach($levels as $l)
                                    <option value="{{$l->id}}">{{$l->level}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.start_time')</label>
                                <input class="form-control" name="start_time">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.finish_time')</label>
                                <input class="form-control" name="finish_time">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.start_date')</label>
                                <input class="form-control datepicker" name="start_date">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.finish_date')</label>
                                <input class="form-control datepicker" name="finish_date">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.classroom')</label>
                                <select name="classroom_id" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    @foreach($classrooms as $c)
                                    <option value="{{$c->id}}">{{$c->number}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.professor')</label>
                                <select name="professor_id" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    @foreach($professors as $p)
                                    <option value="{{$p->id}}">{{$p->teacher}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.branch')</label>
                                <select name="branch_id" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    @foreach($branches as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="required">@lang('label.price')</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-default">@lang('button.save')</button>
                            </div>
                        </form>
                    </div>                 
                </div> <!-- Cierre row -->
            </div> <!-- Cierre de modal-body -->
        </div> <!-- Cierre de modal-content -->
    </div> <!-- Cierre de modal-dialog -->
</div> <!-- Cierre del modal -->
@include('scriptdatepicker')