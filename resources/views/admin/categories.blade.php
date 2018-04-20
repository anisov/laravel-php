@extends('admin.base.base')
@section('content')
    <h1 class="main-admin-title" >Все категории</h1>
    @if ($categories->count() > 0)
        <table class="table__product">
            <tr>
                <th class="table__title">id</th>
                <th class="table__title">Имя</th>
                <th class="table__title">Описание</th>
                <th class="table__title">Действия</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td class="table__td">{{$category->id}}</td>
                    <td class="table__td">{{$category->name}}</td>
                    <td class="table__td">{{$category->description}}</td>
                    <td class="table__td" >
                        <a href="{{route('admin-category', $category->id )}}">Изменить категорию</a>
                        <a href="{{route('admin-category-delete', $category->id )}}">Удалить категорию</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Категорий нет</p>
    @endif
@endsection

