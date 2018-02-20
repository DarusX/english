<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.price')</th>           
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->name}}</td>
                <td>${{$item->price}}</td>
            </tr>
        </tbody>
    </table>
</div>
