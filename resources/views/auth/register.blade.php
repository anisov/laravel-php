@extends('base.base')
@section('content')
<div class="container">
    <div class="registration">
        <div class="registration__title">Зарегестрироваться</div>
        <div class="registration__body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="registration__group">
                    <label for="name" class="registration__field">Имя</label>
                        <input id="name" type="text" class="registration__input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="registration__error">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="registration__group">
                    <label for="email" class="registration__field">Ваш email адресс</label>
                    <input id="email" type="email" class="registration__input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="registration__error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="registration__group">
                    <label for="password" class="registration__field">Пароль</label>
                        <input id="password" type="password" class="registration__input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="registration__group">
                    <label for="password-confirm" class="registration__field">Повторите пароль</label>
                    <input id="password-confirm" type="password" class="registration__input" name="password_confirmation" required>
                </div>
                <div class="registration__group">
                    <label for="admin" class="registration__field">о_О вы можете стать администратором</label>
                    <input id="admin" type="checkbox" value="1" class="registration__input{{ $errors->has('admin') ? ' is-invalid' : '' }}" name="admin">
                    @if ($errors->has('admin'))
                        <span class="invalid-feedback">
                                <strong>{{ $errors->first('admin') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="registration__group">
                    <button type="submit" class="registration-submit">
                        Зарегестрироватся
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
