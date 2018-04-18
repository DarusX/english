<br>
<div class="col-sm-7">
    <select class="form-control" id="item_id">
        <option value="" selected="selected">- Seleccione -</option>
             @foreach($items as $i)
        <option value="{{$i->id}}">{{$i->ItemPay}}</option>
            @endforeach
    </select>
</div>
<div class="col-sm-2">
    <input type="text" id="discount" class="form-control" title="Descuento" placeholder="Descuento">
</div>
<div class="col-sm-1">
    <button type="button" onclick="getitem()" class="btn btn-primary"> <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> Agregar</button>
</div> 
