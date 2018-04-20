@extends('base.base')
@section('content')
<div class="container">
    <div class="login">
        <div class="login__title">
            Вход в личный кабинет
        </div>
            <form method="POST" class="login__form" action="{{ route('login') }}">
                @csrf
                <div class="login__group">
                    <label for="email" class="login__field">Email адрес</label>
                    <input id="email" type="email" class="login__input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="login__errors">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="login__group">
                    <label for="password" class="login__field">Ваш пароль</label>
                    <input id="password" type="password" class="login__input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="login__errors">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="login__group">
                    <div class="login__checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                        </label>
                    </div>
                </div>
                <div class="login__group">
                        <button type="submit" class="login-submit">
                            Войти
                        </button>
                        <a class="login__password" href="{{ route('password.request') }}">
                            Восстоновить пароль
                        </a>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection
