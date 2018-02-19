<div class="col-sm-12">
    <h1>@lang('title.professors')</h1>
</div>
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
                <th>@lang('head.mobile')</th>
                <th>@lang('head.phone')</th>
                <th>@lang('head.blood_type')</th>
                <th>@lang('head.address')</th>
                <th>@lang('head.email')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $l)
            <tr>
                <td>{{$l->teacher}}</td>
                <td>{{$l->birthdate}}</td>
                <td>{{$l->gender}}</td>
                <td>{{$l->career}}</td>
                <td>{{$l->cedula}}</td>
                <td>{{$l->curp}}</td>
                <td>{{$l->rfc}}</td>
                <td>{{$l->mobile}}</td>
                <td>{{$l->phone}}</td>
                <td>{{$l->blood_type}}</td>
                <td>{{$l->address}}</td>
                <td>{{$l->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
