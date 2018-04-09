<div class="col-sm-12">
    <form action="{{route('items.update', $item->id)}}" method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PUT')}}
        <div class="form-group">
            <label for="" class="required">@lang('label.name')</label>
            <input class="form-control" name="name" value="{{$item->name}}">
        </div>
        <div class="form-group">
            <label for="">@lang('label.price')</label>
            <input class="form-control" name="price" value="{{$item->price}}">
        </div>
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
