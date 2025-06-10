<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Add this property to allow mass assignment
    protected $fillable = ['name', 'email', 'password'];

    // Optionally, if you want to hide sensitive fields like password
    protected $hidden = ['password', 'remember_token'];

    // Add casts if needed
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
