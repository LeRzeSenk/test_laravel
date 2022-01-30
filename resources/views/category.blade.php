@extends('layouts.master')
@section('title',$category->name)
@section('content')
    <h1>{{$category->name}}</h1>
    @php $test =[1,2,3] @endphp
    @foreach($test as $product)
        @include('layouts.card')
    @endforeach
@endsection
