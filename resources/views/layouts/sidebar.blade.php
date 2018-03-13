<div id="sidebar-wrapper">
    <img src="{{asset('img/logoe.png')}}" alt="" class="img-responsive">

    <div class="panel-group" id="accordion" role="tablist">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        @lang('menu.professors')
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('professors.index')}}" class="list-group-item">@lang('menu.professors')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        @lang('menu.branches')
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('branches.index')}}" class="list-group-item">@lang('menu.branches')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        @lang('menu.levels')
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('levels.index')}}" class="list-group-item">@lang('menu.levels')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        @lang('menu.course_types')
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('course_types.index')}}" class="list-group-item">@lang('menu.course_types')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                        @lang('menu.course_classifications')
                    </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('course_classifications.index')}}" class="list-group-item">@lang('menu.course_classifications')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                        @lang('menu.course_options')
                    </a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('course_options.index')}}" class="list-group-item">@lang('menu.course_options')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                        @lang('menu.departments')
                    </a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('departments.index')}}" class="list-group-item">@lang('menu.departments')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                        @lang('menu.courses')
                    </a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('courses.index')}}" class="list-group-item">@lang('menu.courses')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                        @lang('menu.course_lists')
                    </a>
                </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('lists.index')}}" class="list-group-item">@lang('menu.courses')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                        @lang('menu.students')
                    </a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('students.index')}}" class="list-group-item">@lang('menu.students')</a>
                    <a href="{{route('students.create')}}" class="list-group-item">@lang('menu.create')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                        @lang('menu.items')
                    </a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('items.index')}}" class="list-group-item">@lang('menu.items')</a>
                    <a href="{{route('items.create')}}" class="list-group-item">@lang('menu.create')</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
                        @lang('menu.employees')
                    </a>
                </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="{{route('employees.index')}}" class="list-group-item">@lang('menu.employees')</a>
                    <a href="{{route('employees.create')}}" class="list-group-item">@lang('menu.create')</a>
                </div>
            </div>
        </div>
    </div>
</div>