<!-- <ul class="pagination pagination-rounded mb-sm-0">
    @if ($paginator->onFirstPage())
    <li class="page-item disabled">
        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
    </li>
    @else
    <li class="page-item">
        <a href="{{ $paginator->nextPageUrl() }}" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
    </li>
    @endif


    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="page-item disabled">
                <a href="#" class="page-link">{{ $element }}</a>
            </li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active">
                        <a href="#" class="page-link">{{ $page }}</a>
                    </li>
                @else
                    <li class="page-item">
                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach


    @if ($paginator->onFirstPage())
    <li class="page-item">
        <a href="{{ $paginator->nextPageUrl() }}" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
    </li>
    @else
    <li class="page-item disabled">
        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
    </li>
    @endif
</ul> -->




<div class="pagination-area">
    <ul>
        @if ($paginator->onFirstPage())
        <li>
            <a href="#">{{ __('locale.Prev') }}</a>
        </li>
        @else
        <li>
            <a href="{{ $paginator->nextPageUrl() }}">{{ __('locale.Next') }}</a>
        </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"> 
                    <a href="#">1</a>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a href="#">{{ $page }}</a>
                        </li>
                    @else
                        <li class="">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->onFirstPage())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}">{{ __('locale.Next') }}</a>
        </li>
        @else
        <li>
            <a href="#">{{ __('locale.Prev') }}</a>
        </li>
        @endif
    </ul>
</div>