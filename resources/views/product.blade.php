@extends('layouts.master')
@section('title',$product->name)
@section('content')
    <h1>{{$product->name}}</h1>
    <h2>{{$category}}</h2>
    <p>Цена: <b>{{$product->price}} ₽</b></p>
    <img src="{{$product->image}}">
    <p>{{$product->description}}</p>

    <form action="/basket/add/2" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

        @csrf       </form>
@endsection

