<div class="container mt-5">
    <h1 class="mb-4 text-center">My Action Plan</h1>

    <div class="mb-4">
        <x-action-form />
    </div>

    @if ($agendas->isEmpty())
        <x-empty-state />
    @else
        <div class="list-group">
            @foreach ($agendas as $agenda)
                <x-agenda-item :id="$agenda->id" :priority="$agenda->priority" :text="$agenda->text" />
            @endforeach
        </div>
    @endif
</div>
