<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ordinance extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'number',
        'title',
        'is_active',
        'date',
        'file',
        'user_id',
        'category_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'date' => 'date',
    ];

    // relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Search ordinances by title, number and category.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $search
     * @param string|null $category
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search, $category = null)
    {
        if ($category) {
            // search by topic slug and title and number
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            })->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('number', 'like', '%' . $search . '%');
            });
        }

        // search by title and number by default
        return $query->where(function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('number', 'like', '%' . $search . '%');
        });
    }

    // accessors
    public function getDateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    public function getFileAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
