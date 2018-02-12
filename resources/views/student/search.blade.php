<div class="col-sm-3">
        <div class="form-group">
            <select name="student_id" class="form-control" style="width:200px">
                <option value="" selected="selected">- seleccione -</option>
                @foreach($students as $student)
                <option value="{{$student->id}}">{{$student->name}}</option>
                @endforeach
            </select>
        </div>
</div>