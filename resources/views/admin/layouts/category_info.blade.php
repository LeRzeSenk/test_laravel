<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->code}}</td>
    <td>{{$category->name}}</td>
    <td>
    <div class="btn-group" role="group">
        <form action="{{route('categories.destroy',$category)}}" method="POST">
            <a type="button" class="btn btn-success" href="{{route('categories.show',$category)}}">Открыть</a>
            <a type="button" class="btn btn-warning" href="{{route('categories.edit',$category)}}">Редактировать</a>
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Удалить">
        </form>
    </div>
    </td>
</tr>
