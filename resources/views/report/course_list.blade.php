<div class="col-sm-12">
    <h1>@lang('title.courses')</h1>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.course')</th>
                <th>@lang('head.level')</th>
                <th>@lang('head.course_type')</th>
                <th>@lang('head.course_option')</th>
                <th>@lang('head.date')</th>
                <th>@lang('head.schedule')</th>
                <th>@lang('head.classroom')</th>
                <th>@lang('head.professor')</th>
                <th>@lang('head.branch')</th>
                <th>@lang('head.price')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $l)
            <tr>
                <td>{{$l->course}}</td>
                <td>{{$l->level->level}}</td>
                <td>{{$l->course_type->name}}</td>
                <td>{{$l->course_option->name}}</td>
                <td>{{$l->Date}}</td>
                <td>{{$l->Schedule}}</td>
                <td>{{$l->classroom->number}}</td>
                <td>{{$l->professor->teacher}}</td>
                <td>{{$l->branch->name}}</td>
                <td>{{$l->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
