@extends('layouts.master')
@section('title','Корзина')
@section('content')
    @if (session()->has('success'))
        <p class="alert alert-success">{{session()->get('success')}}</p>
    @endif
    @if (session()->has('danger'))
        <p class="alert alert-danger">{{session()->get('danger')}}</p>
    @endif
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
                <td>{{$order->orderSumFormat()}} ₽</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{route('order')}}">Оформить заказ</a>
        </div>
    </div>
@endsection
