<div class="sidebar-item">
    <div class="sidebar-item__title">Последние новости</div>
    <div class="sidebar-item__content">
        <div class="sidebar-news">
            <div class="sidebar-news__item">
                @if ($lastNews->count() > 0)
                    @foreach($lastNews as $newsItem)
                        <div class="sidebar-news__item__preview-news">
                            <img src="/upload/img/news/{{$newsItem->image}}" alt="image-new" class="sidebar-new__item__preview-new__image">
                        </div>
                        <div class="sidebar-news__item__title-news">
                            <a href="{{route('artical',$newsItem->slug)}}" class="sidebar-news__item__title-news__link">{{$newsItem->title}}</a>
                        </div>
                    @endforeach
                @else
                    <p>Новостей нет</p>
                @endif
            </div>
        </div>
    </div>
</div>