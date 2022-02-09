@extends('admin.layouts.master')

@section('title','Категории')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Категории</h1>
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
                        Действия
                    </th>
                </tr>
                @foreach($categories as $category)
                    @include('admin.layouts.category_info')
                @endforeach
                </tbody>
            </table>
            <a type="button" class="btn btn-success" href="{{route('categories.create')}}">Создать Категорию</a>
        </div>
    </div>
@endsection
