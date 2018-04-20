@extends('base/base')
@section('title')
  @if ($title and $product)
    {{$product->name}} в разделе {{$title}}
  @else
    Раздел
  @endif
@endsection
@section('content')
<div class="content-main__container">
  <div class="product-container">
    <div class="product-container__image-wrap"><img src="/upload/img/products/{{$product->photo}}" class="image-wrap__image-product"></div>
    <div class="product-container__content-text">
      <div class="product-container__content-text__title">{{$product->name}}</div>
      <div class="product-container__content-text__price">
        <div class="product-container__content-text__price__value">
          Цена: <b>{{$product->price}}</b>
          руб
        </div><a href="{{route('add-cart',$product->id)}}" class="btn btn-blue">Купить</a>
      </div>
      <div class="product-container__content-text__description">
        {{$product->description}}
      </div>
    </div>
  </div>
</div>
@endsection
@section('content-bottom')
  @include('includes.similarProducts')
@endsection