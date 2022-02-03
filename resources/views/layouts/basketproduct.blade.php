<tr>
    <td>
        <a href="{{route('product',[$product->category->code,$product->code])}}">
            <img height="56px" src="{{$product->image}}" alt="{{$product->name}}">
            {{$product->name}}
        </a>
    </td>
    <td><span class="badge">{{$product->pivot->count}}</span>
        <div class="btn-group form-inline">
            <form action="{{route('remove-basket',$product->id)}}" method="POST">
                <button type="submit" class="btn btn-danger" href=""><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                @csrf                         </form>
            <form action="{{route('add-basket',$product->id)}}" method="POST">
                <button type="submit" class="btn btn-success" href=""><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                @csrf                         </form>
        </div>
    </td>
    <td>{{$product->priceFormat()}} ₽</td>
    <td>{{$product->countPriceFormat()}} ₽</td>
</tr>
