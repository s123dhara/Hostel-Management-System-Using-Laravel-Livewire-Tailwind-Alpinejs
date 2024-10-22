<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\Attributes\Title;

class Home extends Component
{
    #[Title('Novelty Hostel')]
    public function render()
    {
        return view('livewire.home.home');
    }
}
