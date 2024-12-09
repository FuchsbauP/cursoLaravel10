@if (@isset($paginator))

    @php
        $queryParams = isset($appends) && gettype($appends) === 'array' ? '&' . http_build_query($appends) : '';
    @endphp

    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->isFirstPage())
            <span
                class="relative inline-flex cursor-default items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-500 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-600">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="?page={{ $paginator->getNumberPreviousPage() }}{{ $queryParams }}" rel="prev"
                class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700 ring-gray-300 transition duration-150 ease-in-out hover:text-gray-500 focus:border-blue-300 focus:outline-none focus:ring active:bg-gray-100 active:text-gray-700 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if (!$paginator->isLastPage())
            <a href="?page={{ $paginator->getNumberNextPage() }}{{ $queryParams }}" rel="next"
                class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700 ring-gray-300 transition duration-150 ease-in-out hover:text-gray-500 focus:border-blue-300 focus:outline-none focus:ring active:bg-gray-100 active:text-gray-700 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span
                class="relative inline-flex cursor-default items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-500 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-600">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif