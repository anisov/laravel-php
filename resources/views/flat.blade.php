@extends('base/base')
@section('title')
  @if ($page->title)
    {{$page->title}}
  @else
    Раздел
  @endif
@endsection
@section('content')
    <div class="content-main__container">
      <div class="news-block content-text"><img src="upload/img/pages/{{$page->image}}" alt="Image" class="alignleft img-news">
        {{$page->description}}
      </div>
    </div>
@endsection
@section('content-bottom')
  @include('includes.similarProducts')
@endsection
