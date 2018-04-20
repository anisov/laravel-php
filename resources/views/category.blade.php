@extends('base/base')
@section('title')
    @if ($title)
        Игры в разделе {{$title}}
    @else
        Раздел
    @endif
@endsection
@section('content')
  <div class="content-main__container">
    <div class="products-category__list">
      @if ($products->count() > 0)
        @foreach($products as $product)
          <div class="products-category__list__item">
            <div class="products-category__list__item__title-product"><a href="{{route('product', $product->slug)}}">{{$product->name}}</a></div>
            <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link">
                <img src="/upload/img/products/{{$product->photo}}" alt="Preview-image">
              </a>
            </div>
            <div class="products-category__list__item__description">
              <span class="products-price">{{$product->price}}.</span><a href="#" class="btn btn-blue">Купить
              </a>
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