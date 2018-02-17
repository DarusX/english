<div class="col-sm-12">
    <h1>@lang('title.students')</h1>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $s)
            <tr>
                <td>{{$s->student->StudentName}}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
