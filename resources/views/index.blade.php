@extends('layouts.master')
@section('title','Главная')
@section('content')
    @if(session()->has('success'))
        @if (session()->get('success') == 1)
            <p class="alert alert-success">Ваш заказ принят в обработку</p>
        @else
            <p class="alert alert-danger">Ошибка</p>
        @endif
    @endif
    <h1>Все товары</h1>
    @foreach($products as $product)
        @include('layouts.card')
    @endforeach
@endsection
