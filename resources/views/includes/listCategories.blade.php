<div class="sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
        <ul class="sidebar-category">
            @if ($categories->count() > 0)
                @foreach($categories as $category)
                    <li class="sidebar-category__item"><a href="{{route('category', $category->slug)}}" class="sidebar-category__item__link">{{$category->name}}</a></li>
                @endforeach
            @else
                <p>Категорий нет</p>
            @endif
        </ul>
    </div>
</div>