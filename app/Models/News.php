<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'wp_id',
        'title',
        'slug',
        'summary',
        'content',
        'cover_image',
        'publish_date',
        'is_active',
        'user_id',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Accessors
    public function getNewsDateAttribute()
    {
        $months = [
            'Jan' => 'Ene',
            'Feb' => 'Feb',
            'Mar' => 'Mar',
            'Apr' => 'Abr',
            'May' => 'May',
            'Jun' => 'Jun',
            'Jul' => 'Jul',
            'Aug' => 'Ago',
            'Sep' => 'Sep',
            'Oct' => 'Oct',
            'Nov' => 'Nov',
            'Dec' => 'Dic',
        ];
        $date = \Carbon\Carbon::parse($this->publish_date)->format('d-M-Y');
        $date = str_replace('-', ' ', $date);
        return strtr($date, $months);
    }

    public function getContentAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getCoverImageAttribute($value)
    {
        return asset('storage/' . $value);
    }

    public function getPublishDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value);
    }

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(NewsCategory::class, 'news_category_news');
    }

    // Query Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
