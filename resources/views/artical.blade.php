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
    <div class="news-block content-text">
      @if($artical)
        <h3 class="content-text__title">
          {{$artical->title}}
        </h3><img src="/upload/img/news/{{$artical->image}}" alt="Image" class="alignleft img-news">
          {{$artical->description}}
      @else
        <h3 class="content-text__title">Такой статьи нет</h3>
      @endif
    </div>
</div>
@endsection
@section('content-bottom')
  @include('includes.similarProducts')
@endsection
