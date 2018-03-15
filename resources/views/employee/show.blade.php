<div class="col-sm-12">
    <table class="table">
        <tbody>
            <tr>
                <td>@lang('head.name')</td>
                <td>{{$employee->name}} {{$employee->lastname}}</td>
            </tr>
            <tr>
                <td>@lang('head.birthdate')</td>
                <td>{{$employee->birthdate}}</td>
            </tr>
            <tr>
                <td>@lang('head.gender')</td>
                <td>{{$employee->gender}}</td>
            </tr>
            <tr>
                <td>@lang('head.career')</td>
                <td>{{$employee->career}}</td>
            </tr>
            <tr>
                <td>@lang('head.cedula')</td>
                <td>{{$employee->cedula}}</td>
            </tr>
            <tr>
                <td>@lang('head.curp')</td>
                <td>{{$employee->curp}}</td>
            </tr>
            <tr>
                <td>@lang('head.rfc')</td>
                <td>{{$employee->rfc}}</td>
            </tr>
            <tr>
                <td>@lang('head.mobile')</td>
                <td>{{$employee->mobile}}</td>
            </tr>
            <tr>
                <td>@lang('head.phone')</td>
                <td>{{$employee->phone}}</td>
            </tr>
            <tr>
                <td>@lang('head.blood_type')</td>
                <td>{{$employee->blood_type}}</td>
            </tr>
            <tr>
                <td>@lang('head.address')</td>
                <td>{{$employee->address}}</td>
            </tr>
            <tr>
                <td>@lang('head.email')</td>
                <td>{{$employee->email}}</td>
            </tr>
            <tr>
                <td>@lang('head.hired')</td> 
                <td>{{$employee->hired}}</td>
            </tr>
        </tbody>
    </table>
</div>