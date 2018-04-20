@extends('admin.base.base')
@section('content')
    <h1 class="main-admin-title" >Создание товара</h1>
    <form class="form" action="{{route('admin-product-add')}}" enctype="multipart/form-data"  method="post">
        @csrf
        <label class="form__label" for="name">Имя Товара: </label>
        <input id="name"  class="form__input" type="text" name="name" required value=""/> <br>
        @if ($errors->has('name'))
            <span class="error">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        <label class="form__label"  for="name">Цена: </label>
        <input id="name" class="form__input" type="number" name=price required value=""/> <br>
        @if ($errors->has('price'))
            <span class="error">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
        <label class="form__label" for="name">Фото: </label>
        <input id="name" class="form__input form__label--img" type="file" name="photo" required value=""/> <br>
        @if ($errors->has('photo'))
            <span class="error">
                <strong>{{ $errors->first('photo') }}</strong>
            </span>
        @endif

        <label class="form__label" for="desc">Описание категории: </label>
        <input id="desc" class="form__input" type="text" name="description" required value=""/> <br>
        @if ($errors->has('description'))
            <span class="error">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
        <label class="form__label" for="name">Категория: </label>
        <input class="form__input" id="name" type="text" name="category" value=""/> <br>
        @if ($errors->has('category'))
            <span class="error">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
        @endif
        <input class="admin-submit" type="submit" value="Добавить">
    </form>
@endsection