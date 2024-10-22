<?php

namespace App\Livewire\Admin\Room;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Add extends Component
{
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.admin.room.add');
    }
}
