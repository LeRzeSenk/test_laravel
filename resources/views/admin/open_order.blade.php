@extends('admin.layouts.master')

@section('title','Заказ №'.$order->id)
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Товары заказа</h1>
            <table class="table">
                <tbody>
                <tr>
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
                        Количество
                    </th>
                </tr>
                @foreach($order->products as $product)
                    @include('admin.layouts.order')
                @endforeach
                </tbody>
            </table>
            <button class="btn"><a style="color: #777;text-decoration: none" href="{{route('orders')}}">Вернуться к заказам</a></button>
        </div>
    </div>
@endsection
