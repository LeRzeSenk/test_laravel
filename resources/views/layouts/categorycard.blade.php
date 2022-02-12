<div class="panel">
    <a href="{{route('category',$category->code)}}">
        <img src="{{Storage::url($category->image)}}" height="125px" width="125px" alt="{{$category->code}}">
        <h2>{{$category->name}}</h2>
    </a>
    <p>
        {{$category->description}}
    </p>
</div>
