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
            <tr>
                <td>{{$branch->name}}</td>
                <td>{{$branch->address}}</td>
                <td>{{$branch->phone}}</td>
            </tr>
        </tbody>
    </table>
</div>
