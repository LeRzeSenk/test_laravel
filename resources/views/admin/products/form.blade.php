@extends('admin.layouts.master')

@isset($category)
    @section('title', 'Редактировать товар ' . $product->name)
@else
    @section('title', 'Создать товар')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать Товар: <b>{{ $product->name }}</b></h1>
        @else
            <h1>Добавить Товар</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                <div class="input-group row">
                    <label for="code" class="col-sm-4 col-form-label">Код товар: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($product) ? $product->code : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-4 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{ $product->name }}@endisset">
                    </div>
                </div>

                <br>
                    <div class="input-group row">
                        <label for="category_id" class="col-sm-4 col-form-label">Категория: </label>
                        <div class="col-sm-6">
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                <option @isset($product) @if($product->category->id == $category->id) selected @endif @endisset
                                value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <br>
                </div>

                <br>
            <div class="input-group row">
                <label for="price" class="col-sm-4 col-form-label">Цена(₽): </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" id="price"
                           value="@isset($product){{ $product->price }}@endisset">
                </div>
            </div>

            <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72"
                                  rows="7">@isset($product){{ $product->description }}@endisset</textarea>
                    </div>
                </div>
                <br>

                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label ">Картинка:   </label>
                    <div class="col-sm-11">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
            <br>
            @csrf
                <button class="btn btn-success">Сохранить</button><a style="margin: 0 10px 0 10px" type="button" class="btn btn-warning" href="{{route('products.index')}}">Назад</a>
        </form>

    </div>
@endsection
