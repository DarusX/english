<div id="sidebar-wrapper">
    <img src="{{asset('img/logoe.png')}}" alt="" class="img-responsive">
    <div class="panel-group" id="accordion" role="tablist">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        @lang('menu.personal_information')
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('page.employee')}}" class="list-group-item">@lang('menu.personal_information')</a>
                </div>
            </div>
        </div>           
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        @lang('menu.password')
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('employee.password')}}" class="list-group-item">@lang('menu.update')</a>
                </div>
            </div>
        </div>
    </div>
</div>