@extends('layouts.master')
@section('title','Главная')
@section('content')
    <h1>Все товары</h1>
    @php $test =[1,2,3] @endphp
    @foreach($test as $product)
        @include('layouts.card')
    @endforeach
@endsection
