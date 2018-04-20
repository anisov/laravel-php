<div class="random-product-container">
    <div class="random-product-container__head">Случайный товар</div>
    <div class="random-product-container__content">
        <div class="item-product">
            @if ($randomProduct != [])
                <div class="item-product__title-product">
                    <a href="{{route('product', $randomProduct->slug)}}" class="item-product__title-product__link">{{$randomProduct->name}}</a>
                </div>
                <div class="item-product__thumbnail">
                    <a href="{{route('product', $randomProduct->slug)}}" class="item-product__thumbnail__link">
                        <img src="/upload/img/products/{{$randomProduct->photo}}" alt="Preview-image" class="item-product__thumbnail__link__img">
                    </a>
                </div>
                <div class="item-product__description">
                    <div class="item-product__description__products-price"><span class="products-price">{{$randomProduct->price}}</span></div>
                    <div class="item-product__description__btn-block"><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
            @else
                <p>Cлучайного товара нет</p>
            @endif
        </div>
    </div>
</div>