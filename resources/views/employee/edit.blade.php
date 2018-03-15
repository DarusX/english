<div class="col-sm-12">
    <form action="{{route('employees.update', $employee->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="">@lang('label.name')</label>
            <input type="text" name="name" class="form-control" value="{{$employee->name}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.lastname')</label>
            <input type="text" name="lastname" class="form-control" value="{{$employee->lastname}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.birthdate')</label>
            <input class="form-control datepicker" name="birthdate" class="form-control" value="{{$employee->birthdate}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.gender')</label>
            <select name="gender" class="form-control" value="{{$employee->gender}}">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.career')</label>
            <input type="text" name="career" class="form-control" value="{{$employee->career}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.cedula')</label>
            <input type="text" name="cedula" class="form-control" value="{{$employee->cedula}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.curp')</label>
            <input type="text" name="curp" class="form-control" value="{{$employee->curp}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.rfc')</label>
            <input type="text" name="rfc" class="form-control" value="{{$employee->rfc}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.mobile')</label>
            <input type="text" name="mobile" class="form-control" value="{{$employee->mobile}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.phone')</label>
            <input type="text" name="phone" class="form-control" value="{{$employee->phone}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.blood_type')</label>
            <input type="text" name="blood_type" class="form-control" value="{{$employee->blood_type}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.address')</label>
            <input type="text" name="address" class="form-control" value="{{$employee->address}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.email')</label>
            <input type="email" name="email" class="form-control" value="{{$employee->email}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.photo')</label>
            <input type="file" name="_photo" class="form-control" >
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>

    </form>
</div>
    @include('scriptdatepicker')