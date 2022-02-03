<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="{{$product->image}}" alt="{{$product->name}}">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} ₽</p>
            <p>{{$product->category->name}}</p>
            <p>
            </p><form action="/basket/add/2" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{route('product',[$product->category->code,$product->code])}}" class="btn btn-default" role="button">Подробнее</a>
                @csrf          </form>
            <p></p>
        </div>
    </div>
</div>
