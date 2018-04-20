@extends('admin.base.base')
@section('content')
    <h1 class="main-admin-title">Почтовый адрес</h1>
    <form class="form" action="{{route('admin-email-add')}}" method="post">
        @csrf
        <label class="form__label" for="name">Почта </label>
        <input class="form__input"  id="email" type="text" name="email" value=""/> <br>
        @if ($errors->has('email'))
            <span class="error">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        <input class="admin-submit" type="submit" value="Добавить">
    </form>
@endsection