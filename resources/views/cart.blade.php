@extends('base/base')
@section('title')
  @if ($title)
    {{$title}}
  @else
    Раздел
  @endif
@endsection
@section('content')
    <div class="content-main__container">
      @if ($orders->count() > 0)
      <div class="cart-product-list">
          @foreach($orders as $order)
            <div class="cart-product-list__item">
              <div class="cart-product__item__product-photo"><img src="/upload/img/products/{{$order->photo}}" class="cart-product__item__product-photo__image"></div>
              <div class="cart-product__item__product-name">
                <div class="cart-product__item__product-name__content"><a href="#">{{$order->name}}</a></div>
              </div>
              <div class="cart-product__item__cart-date">
                <div class="cart-product__item__cart-date__content">{{$order->attributes->date}}</div>
              </div>
                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content">Количество: {{$order->quantity}}</div>
                </div>
              <div class="cart-product__item__product-price"><span class="product-price__value">{{$order->price * $order->quantity}}</span></div>
            </div>
          @endforeach
            <div class="cart-product-list__result-item">
              <div class="cart-product-list__result-item__text">Итого</div>
              <div class="cart-product-list__result-item__value">{{$totalPrice}}</div>
            </div>
      </div>
      <div class="content-footer__container">
        <div class="btn-buy-wrap"><a id="order-form" href="" class="btn-buy-wrap__btn-link">Перейти к оплате</a></div>
      </div>
      @else
        <p>Заказов нет</p>
      @endif
    </div>
    <div class="content-footer__container">
      {{--@include('includes.paginate', ['paginate' => $orders])--}}
    </div>
    <div id="modal_form" class="modal">
        <form action="{{route('products-buy')}}" class="modal__form js-order">
            <label for="name">Ваше Имя</label>
            <input required type="text" class="modal__input" name="name" placeholder="Имя">
            <label for="name">Ваш телефон: </label>
            <input required type="text" class="modal__input" name="price" placeholder="Телефон">
            <label for="name">Адресс Доставки: </label>
            <input required type="text" class="modal__input" name="price" placeholder="Адресс">
            <button class="modal-submit">Отправить</button>
        </form>
        <span class="modal__close" id="modal_close">X</span>
    </div>
    <div class="overlay" id="overlay"></div>
@endsection
@section('content-bottom')
  <div class="content-bottom"></div>
@endsection