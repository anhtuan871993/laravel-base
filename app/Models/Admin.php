<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $table = 'users';
    protected $guard = "admin";

    protected $fillable = [
        'email',
        'password',
    ];
}
