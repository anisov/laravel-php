@extends('admin.base.base')
@section('content')
    <h1 class="main-admin-title" >Все категории</h1>
    @if ($mails->count() > 0)
        <table class="table__product">
            <tr>
                <th class="table__title">id</th>
                <th class="table__title">Email</th>
                <th class="table__title">Действия</th>
            </tr>
            @foreach($mails as $mail)
                <tr>
                    <td class="table__td">{{$mail->id}}</td>
                    <td class="table__td">{{$mail->email}}</td>
                    <td class="table__td" >
                        <a href="{{route('admin-email-delete', $mail->id )}}">Удалить email</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Почтовых адрессов нет</p>
    @endif
@endsection
