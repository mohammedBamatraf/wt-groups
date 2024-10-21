<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Laravel\Passport\HasApiTokens;

class Admin extends User
{
    use HasApiTokens,HasFactory,HasUuids;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
