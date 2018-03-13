<div class="col-sm-12">
    <h1>@lang('title.course') número </h1>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.oral_exam')</th>
                <th>@lang('head.written_exam')</th>
                <th>@lang('head.homework')</th>
                <th>@lang('head.attendance')</th>               
                <th>@lang('head.total')</th>
                <th>@lang('head.comments')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $l)
            <tr>
                <td>{{$l->student->StudentName}}</td>
                <td>{{$l->oral_exam}}</td>
                <td>{{$l->written_exam}}</td>
                <td>{{$l->homework}}</td>
                <td>{{$l->attendance}}</td>
                <td>{{$l->totalScore}}</td>
                <td>{{$l->comment}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
