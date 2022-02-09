<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->code}}</td>
    <td>{{$category->name}}</td>
    <td>
    <a type="button" class="btn btn-success" href="{{route('categories.show',$category)}}">Открыть</a>
    <a type="button" class="btn btn-warning" href="{{route('categories.edit',$category)}}">Редактировать</a>
    <a type="button" class="btn btn-danger" href="{{route('categories.destroy',$category)}}">Удалить</a>
    </td>
</tr>
