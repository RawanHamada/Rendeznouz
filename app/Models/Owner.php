<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Owner extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'company_name',
        'email',
        'email_verified_at',
        'password',
        'avatar',
    ];
}
