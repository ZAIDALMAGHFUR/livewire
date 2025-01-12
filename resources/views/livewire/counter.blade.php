<div>
    <h3>
        Hasil: {{ $count }}
    </h3>

    {{-- Alert Component --}}
    @if (session()->has('message'))
        <x-alert :type="session('alert_type')" class="mt-2">
            {{ session('message') }}
        </x-alert>
    @endif

    {{-- Button Logic --}}
    @if ($count > 0)
        <x-button wire:click="decrement" color="danger" class="btn-sm">KURANG (-)</x-button>
    @else
        <x-button wire:click="decrement" color="danger" class="btn-sm" disabled>KURANG (-)</x-button>
    @endif
    <x-button wire:click="increment" color="success" class="btn-sm">TAMBAH (+)</x-button>
</div>
