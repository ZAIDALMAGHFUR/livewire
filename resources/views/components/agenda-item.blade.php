<div class="list-group-item border d-flex justify-content-between align-items-center rounded mb-3">
    <div class="d-flex align-items-center">
        <!-- Priority Badge -->
        <span
            class="badge badge-pill mr-3 
            {{ $priority == 'High' ? 'badge-danger' : ($priority == 'Medium' ? 'badge-primary' : 'badge-secondary') }}">
            {{ $priority }}
        </span>

        <!-- Editable Text -->
        @if ($this->isEditing === true)
        <input type="text" wire:model.defer="editedText" class="form-control border-0"
                wire:keydown.enter="saveEdit({{ $id }})" wire:blur="cancelEdit" autofocus>
        @else
            <span wire:click="startEditing({{ $id }})" class="text-body" style="cursor: pointer;">
                {{ $text ?? '' }}
            </span>
        @endif

    </div>

    <div class="d-flex align-items-center">
        <input type="checkbox" wire:click="markAsCompleted({{ $id }})" class="mr-3">

        <button wire:click="startEditing({{ $id }})"
            class="btn btn-outline-secondary btn-sm mr-2 d-flex align-items-center justify-content-center"
            style="width: 32px; height: 32px; border-radius: 50%;">
            <i class="fas fa-cog"></i>
        </button>

        <button wire:click="deleteAgenda({{ $id }})"
            class="btn btn-outline-danger btn-sm d-flex align-items-center justify-content-center"
            style="width: 32px; height: 32px; border-radius: 50%;">
            <i class="fas fa-trash"></i>
        </button>
    </div>
</div>
