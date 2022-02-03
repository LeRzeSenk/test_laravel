@extends('layouts.master')
@section('title',$category->name)
@section('content')
    <h1>{{$category->name}} [{{count($category->products)}}]</h1>
    @foreach($category->products as $product)
        @include('layouts.card')
    @endforeach
@endsection
