<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    body{
        font-family: 'Open Sans', sans-serif;
    }
    table{
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }   
    </style>
    <title>Document</title>
</head>
<body>
    <div class="col-sm-12">
        <h1>@lang('title.students')</h1>
    </div>
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
                    <th>@lang('head.allergy')</th>
                    <th>@lang('head.email')</th>
                    <th>@lang('head.address')</th>
                    <th>@lang('head.comments')</th> 
                    <th>@lang('head.registration_date')</th>
                    <th>@lang('head.branch')</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lista as $l)
                <tr>
                    <td>{{$l->studentName}}</td>
                    <td>{{$l->birthdate}}</td>
                    <td>{{$l->gender}}</td>
                    <td>{{$l->curp}}</td>
                    <td>{{$l->mobile}}</td>
                    <td>{{$l->phone}}</td>
                    <td>{{$l->emergency_phone}}</td>
                    <td>{{$l->blood_type}}</td>
                    <td>{{$l->allergy}}</td>
                    <td>{{$l->email}}</td>
                    <td>{{$l->address}}</td>
                    <td>{{$l->comment}}</td>
                    <td>{{$l->registration_date}}</td>
                    <td>{{$l->branch->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>

