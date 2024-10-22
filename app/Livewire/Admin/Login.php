<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class Login extends Component
{

    #[Title('Admin login')]
    #[Layout('components.layouts.auth')]
    public $email = '';
    public $password = '';
    public function render()
    {
        return view('livewire.admin.login');
    }

    public function login1()
    {
        $credentials = $this->validate([
            "email" => 'required|min:2|max:30',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
        // if (Auth::guard('admin')->attempt($credentials)) {
            session()->regenerate();
            session()->flash("success", "Logged in successfully!");
            return $this->redirectRoute("home", navigate: true);
        }
        return $this->addError('email', "The provided credentials do not match our records");

    }

    public function login()
    {
        // Validate the form input
        $credentials = $this->validate([
            'email' => 'required|email|min:2|max:30',
            'password' => 'required|min:2'
        ]);

        // Use the admin guard to attempt login
        if (Auth::guard('admin')->attempt($credentials)) {
            // Regenerate the session after successful login
            session()->regenerate();

            // Flash a success message
            session()->flash('success', 'Logged in successfully!');

            // Redirect to the intended page or dashboard after login
           return redirect()->route('admin.dashboard');
        }

        // Add an error message if login fails
        return $this->addError('email', 'The provided credentials do not match our records.');
    }
}
