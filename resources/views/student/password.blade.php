@extends('layouts.app')
@section('side')
<div class="col-sm-12">
@include('layouts.menu')
</div> 
@endsection
@section('content')
<div class="col-sm-12">
    <h1>@lang('title.password')</h1>
</div>
<div class="col-sm-12">
    <form action="{{route('students.updatepassword')}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.old_password')</label>
            <input type="text" name="password" id="password" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.new_password')</label>
            <input type="text" name="password" id="newpassword" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="required">@lang('label.repeat_password')</label>
            <input type="text" name="password" id="confirmnewpassword" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-default">@lang('button.save')</button>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script>
	$("#changepasswd").validate();
		$("#changepasswd").on('submit',function(e){
		if($("#password").val()=="" || $("#newpassword").val()=="" || $("#confirmnewpassword").val()==""){
		e.preventDefault();
			alert("No debes dejar espacios vacios.");
		}else{
		if($("#newpassword").val() == $("#confirmnewpassword").val()){
		alert("Correcto");
		}
		else{
		e.preventDefault();
		alert("La nueva contraseña no coincide con la confirmación.");
		}
		}
		});
		
				</script>
@endsection
