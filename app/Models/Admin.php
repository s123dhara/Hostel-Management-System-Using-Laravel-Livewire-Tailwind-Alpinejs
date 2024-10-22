<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable; // <-- Use this instead of Model
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable // <-- Extend Authenticatable
{
    use HasFactory;

    protected $fillable = ['email', 'password', 'username'];

    protected $dates = ['created_at'];
}
