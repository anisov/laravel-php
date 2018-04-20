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
    <div class="products-columns">
      @if ($products->count() > 0)
        @foreach($products as $product)
        <div class="products-columns__item">
          <div class="products-columns__item__title-product">
            <a href="{{route('product', $product->slug)}}" class="products-columns__item__title-product__link">{{$product->name}}</a>
          </div>
          <div class="products-columns__item__thumbnail">
            <a href="#" class="products-columns__item__thumbnail__link">
              <img src="/upload/img/products/{{$product->photo}}" alt="Preview-image" class="products-columns__item__thumbnail__img">
            </a>
          </div>
          <div class="products-columns__item__description">
            <span class="products-price">{{$product->price}}</span>
            <a href="{{route('product', $product->slug)}}" class="btn btn-blue">Купить</a>
          </div>
        </div>
        @endforeach
      @else
          <p>Товаров нет</p>
      @endif
    </div>
  </div>
  @include('includes.paginate', ['paginate' => $products])
@endsection
@section('content-bottom')
  <div class="content-bottom"></div>
@endsection