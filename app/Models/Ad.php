<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'category_id',
        'city_id',
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'price',
        'show_price',
        'type',
        'image',
        'whatsapp',
        'phone',
    ];

    protected $casts = [
        'show_price' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getTitleAttribute()
    {
        return $this->{'title_' . app()->getLocale()};
    }

    public function getDescriptionAttribute()
    {
        return $this->{'description_' . app()->getLocale()};
    }
}
