<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.name')</th>
                <th>@lang('head.birthdate')</th>
                <th>@lang('head.gender')</th>
                <th>@lang('head.curp')</th>
                <th>@lang('head.mobile')</th>
                <th>@lang('head.phone')</th>
                <th>@lang('head.emergency_phone')</th>
                <th>@lang('head.blood_type')</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$student->name}} {{$student->lastname}}</td>
                <td>{{$student->birthdate}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->curp}}</td>
                <td>{{$student->mobile}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->emergency_phone}}</td>
                <td>{{$student->blood_type}}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>@lang('head.allergy')</th>
                <th>@lang('head.email')</th>
                <th>@lang('head.address')</th>
                <th>@lang('head.comment')</th> 
                <th>@lang('head.registration_date')</th>
                <th>@lang('head.branch')</th>
                <th>@lang('head.status')</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$student->allergy}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>      
                <td>{{$student->comment}}</td>
                <td>{{$student->registration_date}}</td>
                <td>{{$student->branch->name}}</td>
                <td>{{$student->status->status}}</td>
            </tr>
        </tbody>
    </table>
</div>