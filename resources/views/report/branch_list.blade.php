<div class="col-sm-12">
    <h1>@lang('title.branches')</h1>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.address')</th>
                <th>@lang('head.phone')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $l)
            <tr>
                <td>{{$l->name}}</td>
                <td>{{$l->address}}</td>
                <td>{{$l->phone}}</td>>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
