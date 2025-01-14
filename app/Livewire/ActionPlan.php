<?php

namespace App\Livewire;

use Livewire\Component;
use App\Traits\ChekAction\ChekcAction;

class ActionPlan extends Component
{
    use ChekcAction;

    // Properti untuk data agenda
    public $agenda = '';
    public $priority = '';
    public $agendas = [];

    // Properti untuk fitur edit
    public $isEditing = false;
    public $editedAgendaId;
    public $editedText = '';
    public $editedPriority = '';

    protected $rules = [
        'agenda' => 'required|string|max:255',
        'priority' => 'required|in:High,Medium,Low',
    ];

    protected $listeners = [
        'deleteAgenda' => 'deleteAgenda',
    ];    

    public function mount()
    {
        $this->getMount();
    }

    public function render()
    {
        // dd($this->editedAgendaId, $this->isEditing); // Debug apakah properti ini tersedia
        return view('livewire.action-plan');
    }
}
