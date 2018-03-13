<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th> 
                <th>@lang('head.classification')</th>      
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$option->name}}</td>
                <td>{{$option->classification->name}}</td>
            </tr>
        </tbody>
    </table>
</div>
