<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = [
        'name',
        'user_id'
    ];

    public function group()
    {
        return $this->hasMany(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
