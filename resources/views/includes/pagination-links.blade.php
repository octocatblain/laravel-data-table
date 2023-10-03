<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col">
            <hr>
            @if ($paginator->hasPages())
                <ul class="list d-flex justify-content-between">

                    {{-- previous page links --}}
                    @if ($paginator->onFirstPage())
                        <li class="btn btn-outline-secondary disabled">Prev</li>
                    @else
                        <li class="btn btn-outline-primary" wire:click="previousPage">Prev</li>
                    @endif

                    {{-- pagination elements --}}
                    @foreach ($elements as $element)
                        <div class="flex justify-content-center">
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="btn btn-primary ml-2" wire:click="gotoPage({{ $page }})">
                                            {{ $page }}</li>
                                    @else
                                        <li class="btn btn-outline-primary ml-2"
                                            wire:click="gotoPage({{ $page }})">
                                            {{ $page }}</li>
                                    @endif
                                @endforeach
                            @endif

                        </div>
                    @endforeach


                    {{-- next page links --}}
                    @if ($paginator->hasMorePages())
                        <li class="btn btn-outline-primary" wire:click="nextPage">Next</li>
                    @else
                        <li class="btn btn-outline-secondary disabled">Next</li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
</div>
