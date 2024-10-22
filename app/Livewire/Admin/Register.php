<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;


class Register extends Component
{

    #[Title('Admin Register')]
    #[Layout('components.layouts.auth')]

    public $username, $email, $password, $password_confirmation;
    public function render()
    {
        return view('livewire.admin.register');
    }

    public function register() {
        $validate  = $this->validate([
            "username" => "required|min:2|max:30",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:2|max:40|confirmed",
        ]);

        $validate["password"] = Hash::make($validate['password']);
        Admin::create($validate);
        session()->flash("success", "Admin Created Successfully");
        return redirect()->route('admin.login');
    }
}
