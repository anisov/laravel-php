@extends('base.base')
@section('content')
<div class="profile">
    <div class="profile__data">
        <div class="profile__hello">Здраствуйте: <span class="profile__user">{{ Auth::user()->name }}</span></div>
    </div>
    <div class="profile__logout">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Выйти из личного кабинета
        </a></div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endsection