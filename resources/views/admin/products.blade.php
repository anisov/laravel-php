@extends('admin.base.base')
@section('content')
    <h1 class="main-admin-title" >Все товары</h1>
    @if ($products->count() > 0)
        <table class="table__product">
            <tr>
                <th class="table__title">id</th>
                <th class="table__title">Имя</th>
                <th class="table__title">Цена</th>
                <th class="table__title">Фото</th>
                <th class="table__title">Описание</th>
                <th class="table__title">Категория</th>
                <th class="table__title">Действия</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td class="table__td">{{$product->id}}</td>
                    <td class="table__td">{{$product->name}}</td>
                    <td class="table__td">{{$product->price}}</td>
                    <td class="table__td">{{$product->photo}}</td>
                    <td class="table__td">{{$product->description}}</td>
                    <td class="table__td">{{$product->category->name}}</td>
                    <td class="table__td" >
                        <a href="{{route('admin-product', $product->id )}}">Изменить товар</a>
                        <a href="{{route('admin-product-delete', $product->id )}}">Удалить товар</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Товаров нет</p>
    @endif
@endsection
