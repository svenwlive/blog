@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">

        <div class="flex gap-2 items-center justify-between sm:hidden">

            @if ($paginator->onFirstPage())
                <span class="btn btn-disabled" aria-disabled="true">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="btn btn-disabled" aria-disabled="true">
                    {!! __('pagination.next') !!}
                </span>
            @endif

        </div>

        <div class="hidden sm:flex-1 sm:flex sm:gap-2 sm:items-center sm:justify-between">

            <div>
                <p class="text-sm">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="join rtl:flex-row-reverse">

                    @if ($paginator->onFirstPage())
                        <span class="join-item btn btn-disabled" aria-disabled="true" aria-label="{{ __('pagination.previous') }}">&lsaquo;</span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn" aria-label="{{ __('pagination.previous') }}">&lsaquo;</a>
                    @endif

                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <span class="join-item btn btn-disabled" aria-disabled="true">{{ $element }}</span>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="join-item btn btn-active" aria-current="page">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="join-item btn" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn" aria-label="{{ __('pagination.next') }}">&rsaquo;</a>
                    @else
                        <span class="join-item btn btn-disabled" aria-disabled="true" aria-label="{{ __('pagination.next') }}">&rsaquo;</span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
