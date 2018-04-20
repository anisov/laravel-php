@extends('admin.base.base')
@section('content')
    <h1 class="main-admin-title" >Все категории</h1>
    @if ($orders->count() > 0)
        <table class="table__product">
            <tr>
                <th class="table__title">id</th>
                <th class="table__title">Имя Пользователя</th>
                <th class="table__title">Продукт</th>
                <th class="table__title">id продукта</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td class="table__td">{{$order->id}}</td>
                    <td class="table__td">{{$order->user->name}}</td>
                    <td class="table__td">{{$order->product->name}}</td>
                    <td class="table__td">{{$order->product->id}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Заказов нет</p>
    @endif
@endsection

