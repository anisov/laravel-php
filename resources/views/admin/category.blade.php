@extends('admin.base.base')
@section('content')
    @if ($category)
        <h1 class="main-admin-title" >Редактирование категории</h1>
        <form class="form" action="{{route('admin-category-update', $category->id )}}" method="post">
            @csrf
            <label class="form__label" for="name">Имя Категории: </label>
            <input class="form__input"  id="name" type="text" name="name" value="{{$category->name}}"/> <br>
            @if ($errors->has('name'))
                <span class="error">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <label class="form__label" for="desc">Описание категории: </label>
            <textarea class="form__input"  id="desc" type="text" name="description">{{$category->description}}</textarea>
            @if ($errors->has('description'))
                <span class="error">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
            <input class="admin-submit" value="Добавить" type="submit">
        </form>
    @else
        <p>Такой категории не существует</p>
    @endif
@endsection