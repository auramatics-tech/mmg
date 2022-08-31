<?php
// config
$link_limit = 7;
// maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->lastPage() > 1)
<div class="ltn__pagination-area text-center">
    <div class="ltn__pagination">
        <ul>
            @if ($paginator->currentPage() != 1)
            <li class="page-item {{ $paginator->currentPage() == 1 ? ' disabled' : '' }}">
                <a class="si_link" href="{{ $paginator->url(1) }}"><i class="fas fa-angle-double-left"></i></a>
            </li>
            @endif
            @php
            $count = 0;
            @endphp
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                @php
                $half_total_links = floor($link_limit / 2);
                $from = $paginator->currentPage() - $half_total_links;
                $to = $paginator->currentPage() + $half_total_links;
                if ($paginator->currentPage() < $half_total_links) { $to +=$half_total_links - $paginator->currentPage();
                    }
                    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) { $from -=$half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                        }
                        @endphp
                        @if ($from < $i && $i < $to) @php $count++; @endphp <li class="page-item {{ $paginator->currentPage() == $i ? ' active' : '' }}">
                            <a class="si_link @if (request()->page && request()->page == $i) page_active @endif" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                            </li>
                            @elseif($i == 1)
                            <li class="page-item {{ $paginator->currentPage() == $i ? ' active' : '' }}">
                                <a class="si_link @if (request()->page && request()->page == $i) page_active @endif" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                            </li>
                            @endif
                            @endfor
                            @if ($paginator->currentPage() != $paginator->lastPage())
                            <li class="page-item {{ $paginator->currentPage() == $paginator->lastPage() ? ' disabled' : '' }}">
                                <a class="si_link" href="{{ $paginator->url($paginator->lastPage()) }}"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                            @endif
        </ul>
    </div>
</div>
@endif