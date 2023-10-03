<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = [
        'name',
        'link',
        'views',
        'description',
        'social_type',
        'is_active',
        'category_id',
        'language_id',
        'collection_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
