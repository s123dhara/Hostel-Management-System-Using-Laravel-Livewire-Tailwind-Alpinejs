<?php

namespace App\Livewire\Admin;

use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Logout extends Component
{
    public function render()
    {
        return view('livewire.admin.logout');
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('success', "Logged out successfully!");
        return redirect()->route('admin.login');
    }
}


