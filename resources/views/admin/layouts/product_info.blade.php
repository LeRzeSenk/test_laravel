<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->code}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->category->name}}</td>
    <td>{{$product->category->price}}</td>
    <td>
        <div class="btn-group" role="group">
            <form action="{{route('products.destroy',$product)}}" method="POST">
                <a type="button" class="btn btn-success" href="{{route('products.show',$product)}}">Открыть</a>
                <a type="button" class="btn btn-warning" href="{{route('products.edit',$product)}}">Редактировать</a>
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Удалить">
            </form>
        </div>
    </td>
</tr>
