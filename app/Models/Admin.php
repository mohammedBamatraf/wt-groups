<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Laravel\Passport\HasApiTokens;

class Admin extends User
{
    use HasFactory,HasUuids,HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
