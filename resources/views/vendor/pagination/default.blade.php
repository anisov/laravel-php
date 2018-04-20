@if ($paginator->hasPages())
    <ul class="page-nav">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-nav__item"><a href="" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
        @else
            <li class="page-nav__item"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class='page-nav__item active'><a class="page-nav__item__link" href="">{{ $page }}</a></li>
                    @else
                        <li class='page-nav__item'><a class="page-nav__item__link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-nav__item"><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="page-nav__item__link">
                    <i class="fa fa-angle-double-right"></i></a>
            </li>
        @else
            <li class="page-nav__item"><a href="" rel="next" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
        @endif
    </ul>
@endif
