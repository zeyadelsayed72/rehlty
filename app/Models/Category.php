<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'icon',
        'parent_id',
    ];


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function getNameAttribute()
    {
        return $this->{'name_' . app()->getLocale()};
    }
}
