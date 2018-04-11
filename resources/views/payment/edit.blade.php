<div class="col-sm-12">
    <form action="{{route('payments.update', $payment->id)}}" method="POST" role="form">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <table class="table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Discount</th>
                <th>Price</th>
                <th>Total_price</th>
            </tr>
        <tbody>
            @foreach($payment->details as $d)
            @isset($d->item_id)
            <tr>            
                <td>{{$d->course->course}}</td>     
                <td>{{$d->discount}}%</td>
                <td>${{$d->course->price}}</td> 
                <td>${{$d->priceDiscount}}</td>          
            </tr>
            @endisset
            @isset($d->course_id)
            <tr>
            
                <td>Curso no. {{$d->course->CourseP}}</td>
                <td>{{$d->discount}}%</td>
                <td>${{$d->course->price}}</td>
                <td>${{$d->PriceDiscount}}</td>           
            </tr>
            @endisset
            @endforeach
        </tbody>
            <tr>   
                <th></th>
                <th></th>
                <th>Total a pagar</th>
                <th>${{$payment->Total}}</th>
            </tr>
            <tr>  
                <th></th>
                <th></th>
                <th>Resta</th>
                <th>${{$payment->Debit}}</th>
            </tr>
    </table>
    </form>
</div>
