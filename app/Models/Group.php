<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Group extends Model implements HasMedia
{
    use HasFactory,HasUuids,InteractsWithMedia;

    protected $fillable = [
        'name',
        'link',
        'views',
        'description',
        'social_type',
        'is_active',
        'vip',
        'vip_end_at',
        'category_id',
        'language_id',
        'user_id'
        // 'collection_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    // public function collection()
    // {
    //     return $this->belongsTo(Collection::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function favorite()
    {
        return $this->belongsToMany(Group::class,'favorites','group_id','user_id')->withTimestamps();
    }

    public function usersWhoIgnored()
    {
        return $this->belongsToMany(User::class, 'ignored_groups', 'group_id', 'user_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image group')->singleFile();

    }
    public function getAdvertisement(Request $request)
    {
        $language_code = app()->getLocale();
        $ad = Advertisement:: where([['language_code' , $language_code],['state',1]]) -> first();
        if ($ad){
            return $ad;
        }
        return null;


    }
}
