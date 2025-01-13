<div class="card shadow-sm p-4">
    <div class="form-group">
        <input 
            type="text" 
            wire:model="agenda" 
            placeholder="Tulis agenda anda disini..." 
            class="form-control" 
            id="agendaInput"
            oninput="checkFormValidity()"
        >
        @error('agenda') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mt-3">
        <div class="form-check form-check-inline">
            <input 
                class="form-check-input" 
                type="radio" 
                wire:model="priority" 
                value="High" 
                id="priorityHigh" 
                name="priority"
                onclick="checkFormValidity()"
            >
            <label class="form-check-label" for="priorityHigh">High Priority</label>
        </div>
        <div class="form-check form-check-inline">
            <input 
                class="form-check-input" 
                type="radio" 
                wire:model="priority" 
                value="Medium" 
                id="priorityMedium" 
                name="priority"
                onclick="checkFormValidity()"
            >
            <label class="form-check-label" for="priorityMedium">Medium Priority</label>
        </div>
        <div class="form-check form-check-inline">
            <input 
                class="form-check-input" 
                type="radio" 
                wire:model="priority" 
                value="Low" 
                id="priorityLow" 
                name="priority"
                onclick="checkFormValidity()"
            >
            <label class="form-check-label" for="priorityLow">Low Priority</label>
        </div>
        @error('priority') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="text-right mt-3">
        <button 
            wire:click="addAgenda" 
            class="btn btn-success" 
            id="submitButton" 
            disabled>
            Tambah
        </button>
    </div>
</div>

<script>
    function checkFormValidity() {
        const agenda = document.getElementById('agendaInput').value.trim();
        const priority = document.querySelector('input[name="priority"]:checked'); // Perbaikan di sini
        const submitButton = document.getElementById('submitButton');
        if (agenda && priority) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    }
</script>