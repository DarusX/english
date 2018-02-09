<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.birthdate')</th>
                <th>@lang('head.gender')</th>
                <th>@lang('head.career')</th>
                <th>@lang('head.cedula')</th>
                <th>@lang('head.curp')</th>
                <th>@lang('head.rfc')</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$professor->name}} {{$professor->lastname}}</a></td>
                <td>{{$professor->birthdate}}</td>
                <td>{{$professor->gender}}</td>
                <td>{{$professor->career}}</td>
                <td>{{$professor->cedula}}</td>
                <td>{{$professor->curp}}</td>
                <td>{{$professor->rfc}}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.mobile')</th>
                <th>@lang('head.phone')</th>
                <th>@lang('head.blood_type')</th>
                <th>@lang('head.address')</th>
                <th>@lang('head.email')</th>
                <th>@lang('head.hired')</th> 
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$professor->mobile}}</td>
                <td>{{$professor->phone}}</td>
                <td>{{$professor->blood_type}}</td>
                <td>{{$professor->address}}</td>
                <td>{{$professor->email}}</td>
                <td>{{$professor->hired}}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>