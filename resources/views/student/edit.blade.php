<div class="col-sm-12">
    <form action="{{route('students.update', $student->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.name')</label>
            <input type="text" name="name" class="form-control" value="{{$student->name}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.lastname')</label>
            <input type="text" name="lastname" class="form-control" value="{{$student->lastname}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.birthdate')</label>
            <input class="form-control datepicker" name="birthdate" class="form-control" value="{{$student->birthdate}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.gender')</label>
            <select name="gender" class="form-control" value="{{$student->gender}}">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.curp')</label>
            <input type="text" name="curp" class="form-control" value="{{$student->curp}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.mobile')</label>
            <input type="text" name="mobile" class="form-control" value="{{$student->mobile}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.phone')</label>
            <input type="text" name="phone" class="form-control" value="{{$student->phone}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.emergency_phone')</label>
            <input type="text" name="emergency_phone" class="form-control" value="{{$student->emergency_phone}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.blood_type')</label>
            <input type="text" name="blood_type" class="form-control" value="{{$student->blood_type}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.allergy')</label>
            <input type="text" name="allergy" class="form-control" value="{{$student->allergy}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.email')</label>
            <input type="email" name="email" class="form-control" value="{{$student->email}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.address')</label>
            <input type="text" name="address" class="form-control" value="{{$student->address}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="" >@lang('label.comments')</label>
            <input type="text" name="comment" class="form-control" value="{{$student->comment}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="">@lang('label.branch')</label>
            <select name="branch_id" class="form-control">
                <option value="">-Seleccione-</option>
                @foreach($branches as $b)
                @if ($student->branch_id==$b->id)
                <option value="{{$b->id}}" selected="selected">{{$b->name}}</option>
                @else
                <option value="{{$b->id}}">{{$b->name}}</option>@endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>

    </form>
</div>
@include('scriptdatepicker')
