<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use DB;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function collection()
    {
        return $this->hasMany(Collection::class);
    }

    public function favorite()
    {
        return $this->belongsToMany(Group::class, 'favorites', 'user_id', 'group_id')->withTimestamps()->using(Favorite::class);
    }

    public function report(): HasMany
    {
        return $this->hasMany(Report::class);
    }

    public function blockedUsers(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'blocked_users',
            'user_id',
            'blocked_user_id'
        )->withTimestamps();
    }

    public function ignoredGroups(): BelongsToMany
    {
        return $this->belongsToMany(
            Group::class,
            'ignored_groups',
            'user_id',
            'group_id'
        )->withTimestamps();
    }

    public  static function isFavorite($group_id)
    {
        $check_authenticated = auth()->guard('api')->check();


        if ($check_authenticated) {
            $user = auth('api')->user()->id;


            $is_favorite = Favorite::where([['group_id', $group_id], ['user_id', $user]])->exists();

            return $is_favorite;
        }

        return null;
    }
}
