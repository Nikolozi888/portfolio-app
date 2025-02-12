@props(['link'])

<nav aria-label="Page navigation">
    <ul class="pagination">
        @if ($link->onFirstPage())
            <li class="page-item disabled"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $link->previousPageUrl() }}"><i class="far fa-long-arrow-left"></i></a></li>
        @endif

        @foreach ($link->links() as $page)
            <li class="page-item {{ $page->active ? 'active' : '' }}">
                <a class="page-link" href="{{ $page->url }}">{{ $page->label }}</a>
            </li>
        @endforeach

        @if ($link->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $link->nextPageUrl() }}"><i class="far fa-long-arrow-right"></i></a></li>
        @else
            <li class="page-item disabled"><a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a></li>
        @endif
    </ul>
</nav>
