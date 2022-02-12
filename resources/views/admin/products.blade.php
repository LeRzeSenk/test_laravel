@extends('admin.layouts.master')

@section('title','Товары')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Товары</h1>
            <table class="table">
                <tbody>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Код
                    </th>
                    <th>
                        Название
                    </th>
                    <th>
                        Категория
                    </th>
                    <th>
                        Цена
                    </th>
                    <th>
                        Действия
                    </th>
                </tr>
                @foreach($products as $product)
                    @include('admin.layouts.product_info')
                @endforeach
                </tbody>
            </table>
            <a type="button" class="btn btn-success" href="{{route('products.create')}}">Создать Товар</a>
        </div>
    </div>
@endsection
