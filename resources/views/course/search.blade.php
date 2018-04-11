<br>
<div class="col-sm-7">
    <select class="form-control" id="course_id">
        <option value="" selected="selected">- Seleccione -</option>
             @foreach($courses as $course)
        <option value="{{$course->id}}">Curso no. {{$course->CourseInformation}}</option>
            @endforeach
    </select>
</div>
<div class="col-sm-2">
    <input type="text" id="discount" class="form-control" title="Descuento" placeholder="Descuento">
</div>
<div class="col-sm-1">
    <button type="button" onclick="getcourse()" class="btn btn-primary"> <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> Agregar</button>
</div> 
