<tr>
    <td>{{$order->id}}</td>
    <td>{{$order->name}}</td>
    <td>{{$order->number}}</td>
    <td>{{$order->created_at->format('h:i:s d/m/Y')}}</td>
    <td>{{$order->orderSumFormat()}} ₽</td>
    <td><a type="button" class="btn btn-success" href="{{route('openOrder',$order->id)}}">Открыть</a>
        <a type="button" class="btn btn-danger" href="{{route('delete-order',$order->id)}}">Удалить</a></td>
</tr>
