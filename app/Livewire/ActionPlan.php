<?php

namespace App\Livewire;

use Livewire\Component;
use App\Traits\ChekAction\ChekcAction;

class ActionPlan extends Component
{
    use ChekcAction;

    public $agenda = '';
    public $priority = '';
    public $agendas = [];
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
        return view('livewire.action-plan');
    }
}
