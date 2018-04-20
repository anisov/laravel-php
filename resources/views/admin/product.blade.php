@extends('admin.base.base')
@section('content')
    @if ($product)
        <h1 class="main-admin-title" >Редактирование товара</h1>
        <form class="form action="{{route('admin-product-update', $product->id )}}" enctype="multipart/form-data"  method="post">
            @csrf
            <label class="form__label for="name">Имя Товара: </label>
            <input class="form__input" id="name" type="text" name="name" value="{{$product->name}}"/> <br>
            @if ($errors->has('name'))
                <span class="error">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <label class="form__label for="name">Цена: </label>
            <input class="form__input" id="name" type="number" name=price value="{{$product->price}}"/> <br>
            @if ($errors->has('price'))
                <span class="error">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
            <label class="form__label" for="name">Фото: </label>
            <input class="form__input form__label--img" id="name" type="file" name="photo" value="{{$product->photo}}"/> <br>
            @if ($errors->has('photo'))
                <span class="error">
                    <strong>{{ $errors->first('photo') }}</strong>
                </span>
            @endif

            <label class="form__label for="desc">Описание категории: </label>
            <textarea class="form__input" id="desc" type="text" name="description">{{$product->description}}</textarea>
            @if ($errors->has('description'))
                <span class="error">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
            <label class="form__label for="name">Категория: </label>
            <input class="form__input" id="name" type="text" name="category" value="{{$product->category_id}}"/> <br>
            @if ($errors->has('category'))
                <span class="error">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
            @endif
            <input class="admin-submit" value="Добавить"  type="submit">
        </form>
    @else
        <p>Такого товара не существует</p>
    @endif
@endsection