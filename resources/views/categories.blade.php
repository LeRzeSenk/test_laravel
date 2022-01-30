@extends('layouts.master')
@section('title','Все категории')
@section('content')
    @foreach($categories as $category)
        @include('layouts.categorycard')
    @endforeach
@endsection

