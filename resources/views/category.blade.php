@extends('layouts.master')
@section('title',$category->name)
@section('content')
    <h1>{{$category->name}}</h1>
    @foreach($products as $product)
        @include('layouts.card')
    @endforeach
@endsection
