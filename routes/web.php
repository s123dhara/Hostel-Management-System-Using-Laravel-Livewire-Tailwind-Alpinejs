<?php

use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\Login as AdminLogin;
use App\Livewire\Admin\Register as AdminRegister;
use App\Livewire\Admin\Room\Add as AdminAddRoom;
use App\Livewire\Admin\Room\Room;

use App\Livewire\User\Dashboard as UserDashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Home\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');



/* Admin Routes */
// Register the admin-register route only in development environment
if (app()->environment('local')) {
    Route::get('/admin-register', AdminRegister::class)->name('admin.register');
}


Route::middleware('auth')->group( function() {
    Route::get('/dashboard', UserDashboard::class)->name('user.dashboard');
});

Route::middleware('auth:admin')->group(function() {
    Route::get('/admin', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/add-room', AdminAddRoom::class)->name('admin.addroom');
    Route::get('/room', Room::class)->name('admin.room');
});


Route::get('/admin-login', AdminLogin::class)->name('admin.login');
