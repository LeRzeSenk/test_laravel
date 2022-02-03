@extends('layouts.master')
@section('title','Корзина')
@section('content')
    <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
           @include('layouts.basketproduct')
            @endforeach
            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>{{$order->orderSum()}} ₽</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{route('order')}}">Оформить заказ</a>
        </div>
    </div>
@endsection
