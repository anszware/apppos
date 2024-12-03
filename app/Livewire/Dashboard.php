<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("Dashboard POS")]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}