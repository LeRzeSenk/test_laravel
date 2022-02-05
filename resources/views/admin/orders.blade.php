@extends('admin.layouts.master')

    @section('title','Заказы')
@section('content')
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1>Заказы</h1>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Имя
                            </th>
                            <th>
                                Телефон
                            </th>
                            <th>
                                Когда отправлен
                            </th>
                            <th>
                                Сумма
                            </th>
                            <th>
                                Действия
                            </th>
                        </tr>
                        @foreach($orders as $order)
                            @include('admin.layouts.order_info')
                        @endforeach
                        </tbody>
                    </table>

        </div>
    </div>
@endsection
