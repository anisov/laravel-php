@if ($paginate->count() > 0)
    <div class="content-footer__container">
        <ul class="page-nav">
            {{$paginate->links('vendor.pagination.default')}}
        </ul>
    </div>
@endif