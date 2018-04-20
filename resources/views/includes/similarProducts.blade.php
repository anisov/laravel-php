<div class="content-bottom">
    <div class="line"></div>
    <div class="content-head__container">
        <div class="content-head__title-wrap">
            <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
        </div>
    </div>
    <div class="content-main__container">
        <div class="products-columns">
            @if ($similarProducts->count() > 0)
                @foreach($similarProducts as $product)
                    <div class="products-columns__item">
                        <div class="products-columns__item__title-product"><a href="{{route('product', $product->slug)}}" class="products-columns__item__title-product__link">{{$product->name}}</a></div>
                        <div class="products-columns__item__thumbnail">
                            <a href="{{route('product', $product->slug)}}" class="products-columns__item__thumbnail__link">
                                <img src="/upload/img/products/{{$product->photo}}" alt="Preview-image" class="products-columns__item__thumbnail__img">
                            </a>
                        </div>
                        <div class="products-columns__item__description"><span class="products-price">{{$product->price}}</span><a href="{{route('product', $product->slug)}}" class="btn btn-blue">Купить</a></div>
                    </div>
                @endforeach
            @else
                <p>Похожих товаров нет</p>
            @endif
        </div>
    </div>
</div>