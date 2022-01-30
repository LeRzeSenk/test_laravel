@extends('layouts.master')
@section('title','Главная')
@section('content')
    <h1>Все товары</h1>
    @foreach($products as $product)
        @include('layouts.card')
    @endforeach
@endsection
