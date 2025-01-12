<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0; // Default value

    public function increment()
    {
        $this->count++;
        session()->flash('message', 'Angka berhasil ditambah.');
        session()->flash('alert_type', 'success');
    }

    public function decrement()
    {
        if ($this->count > 0) {
            $this->count--;
            session()->flash('message', 'Angka berhasil dikurangi.');
            session()->flash('alert_type', 'warning');
        }
    }
    
    public function render()
    {
        return view('livewire.counter');
    }
}
