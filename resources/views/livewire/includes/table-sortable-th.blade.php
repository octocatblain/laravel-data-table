<th class="font-weight-bolder" wire:click="setSortBy('{{ $columnName }}')">
    <button class="d-flex justify-content-start bg-transparent btn">
        {{ $displayName }}
        @if ($orderBy !== $columnName)
            *
        @elseif($orderAsc === false)
            {{-- On click it will order in descending order --}}
            -
        @else
            +
        @endif
    </button>
</th>
