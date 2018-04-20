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
    <div class="news-list__container">
      @if ($news->count() > 0)
        @foreach($news as $artical)
          <div class="news-list__item">
            <div class="news-list__item__thumbnail"><img src="upload/img/news/{{$artical->image}}"></div>
            <div class="news-list__item__content">
              <div class="news-list__item__content__news-title">{{$artical->title}}</div>
              <div class="news-list__item__content__news-date">{{$artical->date}}</div>
              <div class="news-list__item__content__news-content">
                {{$artical->shortDesc}}
              </div>
            </div>
            <div class="news-list__item__content__news-btn-wrap"><a href="{{route('artical',$artical->slug)}}" class="btn btn-brown">Подробнее</a></div>
          </div>
        @endforeach
      @else
        <p>Новостей нет</p>
      @endif
    </div>
  </div>
  @include('includes.paginate', ['paginate' => $news])
@endsection
@section('content-bottom')
  <div class="content-bottom"></div>
@endsection