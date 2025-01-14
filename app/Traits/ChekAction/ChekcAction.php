<?php

namespace App\Traits\ChekAction;

use App\Models\Agenda;

trait ChekcAction
{
    protected $listeners = [
        'deleteAgenda' => 'deleteAgenda',
    ];

    public function getMount()
    {
        $this->agendas = Agenda::where('completed', false)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function isFormValid()
    {
        return !empty($this->agenda) && !empty($this->priority);
    }

    public function addAgenda()
    {
        if (!$this->isFormValid()) {
            return;
        }

        Agenda::create([
            'text' => $this->agenda,
            'priority' => $this->priority,
            'completed' => false,
        ]);

        $this->reset(['agenda', 'priority']);
        $this->getMount();
    }

    public function markAsCompleted($id)
    {
        $agenda = Agenda::find($id);
        if ($agenda) {
            $agenda->update(['completed' => true]);
            $this->getMount();
        }
    }

    public function deleteAgenda($id)
    {
        Agenda::find($id)?->delete();
        $this->getMount();
    }

    public function startEditing($id)
    {
        $agenda = Agenda::find($id);
        // dd($agenda);
        if ($agenda) {
            $this->isEditing = true;
            $this->editedAgendaId = $id;
            $this->editedText = $agenda->text;
        }
    }

    public function saveEdit($id)
    {
        $agenda = Agenda::find($id);
        if ($agenda) {
            $agenda->update([
                'text' => $this->editedText,
            ]);
            $this->getMount();
        }
    }
}
