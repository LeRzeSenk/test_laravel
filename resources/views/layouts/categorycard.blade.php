<div class="panel">
    <a href="{{route('category',$category->code)}}">
        <img src="{{$category->image}}">
        <h2>{{$category->name}}</h2>
    </a>
    <p>
        {{$category->description}}
    </p>
</div>
