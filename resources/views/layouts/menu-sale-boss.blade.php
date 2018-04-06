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
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        @lang('menu.courses')
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('sale.list')}}" class="list-group-item">@lang('menu.courses')</a>
                </div>
            </div>
        </div>      
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        @lang('menu.pre-registered')
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('sale.pre-registered')}}" class="list-group-item">@lang('menu.pre-registered')</a>
                </div>
            </div>
        </div>   
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        @lang('menu.students')
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('sale.student')}}" class="list-group-item">@lang('menu.students')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                        @lang('menu.recepcionists')
                    </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="" class="list-group-item">@lang('menu.recepcionists')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                        @lang('menu.password')
                    </a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('employee.password')}}" class="list-group-item">@lang('menu.update')</a>
                </div>
            </div>
        </div>
    </div>
</div>