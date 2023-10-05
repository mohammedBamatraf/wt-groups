<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
