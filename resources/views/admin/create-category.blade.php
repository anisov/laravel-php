@extends('admin.base.base')
@section('content')
<h1 class="main-admin-title">Создание категории</h1>
<form class="form" action="{{route('admin-category-add')}}" method="post">
    @csrf
    <label class="form__label" for="name">Имя Категории: </label>
    <input class="form__input"  id="name" type="text" name="name" value=""/> <br>
    @if ($errors->has('name'))
        <span class="error">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
    <label class="form__label" for="desc">Описание категории: </label>
    <textarea class="form__input"  id="desc" type="text" name="description"></textarea>
    @if ($errors->has('description'))
        <span class="error">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
    <input class="admin-submit" value="Добавить" type="submit">
</form>
@endsection