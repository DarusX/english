<div class="col-sm-12"> 
    <form action="{{route('branches.update', $branch->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="">@lang('label.name')</label> 
            <input type="text" class="form-control" name="name" value="{{$branch->name}}">
        </div>
        <div class="form-group">
            <label for="" class="required">@lang('label.address')</label>
            <input class="form-control" name="address" value="{{$branch->address}}">
        </div>
        <div class="form-group">
            <label for="" class="required">@lang('label.phone')</label>
            <input class="form-control" name="phone" value="{{$branch->phone}}">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>