@extends('layouts.master')
@section('title',$product->name)
@section('content')
    <h1>{{$product->name}}</h1>
    <h2>{{$product->category->name}}</h2>
    <p>Цена: <b>{{$product->priceFormat()}} ₽</b></p>
    <img src="{{$product->image}}" alt="{{$product->name}}">
    <p>{{$product->description}}</p>

    <form action="{{route('add-basket',$product)}}" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

        @csrf       </form>
@endsection

