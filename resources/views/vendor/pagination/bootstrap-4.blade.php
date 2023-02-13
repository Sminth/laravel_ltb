@if ($paginator->hasPages())
<div class="row pt--30">
    <div class="col-md-12">
        <div class="pagination-block">
            <ul class="pagination-btns flex-center">
                @if ($paginator->onFirstPage())
                <li class="disabled" disabled>
                    <span class="single-btn prev-btn">|<i class="zmdi zmdi-chevron-left"></i> </span>

                </li>
                @else
                <li class="page-item">
                    <a  href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="precedent" class="single-btn prev-btn">|<i class="zmdi zmdi-chevron-left"></i> </a>

                </li>
            @endif
                {{-- <li><a href="" class="single-btn prev-btn "><i class="zmdi zmdi-chevron-left"></i> </a>
                </li> --}}
                {{-- Pagination Elements --}}
            @foreach ($elements as $element)
            @if (is_string($element))
            <li class="page-item disabled" aria-disabled="true"><span class="single-btn">{{ $element }}</span></li>
        @endif
        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="active"><span class="single-btn">{{ $page }}</span></li>
                @else
                <li><a href="{{ $url }}" class="single-btn">{{ $page }}</a></li>
                @endif
                @endforeach
            @endif
        @endforeach
                {{-- <li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a>
                </li> --}}
                {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i>|</a>
                </li>
                @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="single-btn next-btn" aria-hidden="true"><i class="zmdi zmdi-chevron-right"></i>|</span>
                </li>
            @endif
            </ul>
        </div>
    </div>
</div>
@endif
