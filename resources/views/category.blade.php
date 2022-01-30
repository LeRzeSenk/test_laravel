@extends('layouts.master')
@section('title',$category)
@section('content')
    <h1>{{$category}}</h1>
    @php $test =[1,2,3] @endphp
    @foreach($test as $product)
        @include('layouts.card')
    @endforeach
@endsection
