<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.duration')</th>
                <th>@lang('head.information')</th>             
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$type->name}}</td>
                <td>{{$type->duration}}</td>
                <td>{{$type->information}}</td>
            </tr>
        </tbody>
    </table>
</div>
