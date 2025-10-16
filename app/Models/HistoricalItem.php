<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HistoricalItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'content',
        'image_path',
        'pdf_path',
        'event_date',
        'is_active',
        'featured',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'featured' => 'boolean',
        'event_date' => 'date',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function category()
    {
        return $this->belongsTo(HistoricalCategory::class);
    }

    /**
     * Relación con los archivos del item histórico
     */
    public function files()
    {
        return $this->hasMany(HistoricalItemFile::class)->orderBy('sort_order');
    }

    /**
     * Obtener solo las imágenes
     */
    public function images()
    {
        return $this->hasMany(HistoricalItemFile::class)
            ->where('file_type', 'image')
            ->orderBy('sort_order');
    }

    /**
     * Obtener solo los PDFs
     */
    public function pdfs()
    {
        return $this->hasMany(HistoricalItemFile::class)
            ->where('file_type', 'pdf')
            ->orderBy('sort_order');
    }

    /**
     * Obtener la imagen destacada (principal)
     */
    public function featuredImage()
    {
        return $this->hasOne(HistoricalItemFile::class)
            ->where('file_type', 'image')
            ->where('is_featured', true);
    }

    /**
     * Obtener la primera imagen (para compatibilidad)
     */
    public function firstImage()
    {
        return $this->hasOne(HistoricalItemFile::class)
            ->where('file_type', 'image')
            ->orderBy('sort_order');
    }

    /**
     * Relación con los comentarios
     */
    public function comments()
    {
        return $this->hasMany(HistoricalComment::class)->orderBy('created_at', 'desc');
    }

    /**
     * Obtener solo comentarios aprobados
     */
    public function approvedComments()
    {
        return $this->hasMany(HistoricalComment::class)
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            if (empty($item->slug)) {
                $item->slug = Str::slug($item->title) . Str::random(5);
            }
        });

        static::updating(function ($item) {
            if ($item->isDirty('title')) {
                $item->slug = Str::slug($item->title) . Str::random(5);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
