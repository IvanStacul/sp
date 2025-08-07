<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phones',
        'mobiles',
        'email',
        'description',
        'category',
        'is_active',
        'additional_details',
        'website',
        'facebook',
        'instagram',
        'whatsapp',
        'opening_time',
        'closing_time',
        'opening_days',
        'image',
        'latitude',
        'longitude',
        'sort_order',
    ];

    protected $casts = [
        'phones' => 'array',
        'mobiles' => 'array',
        'opening_days' => 'array',
        'is_active' => 'boolean',
        'latitude' => 'decimal:7',
        'longitude' => 'decimal:7',
    ];

    // Constantes para las categorías
    public const CATEGORIES = [
        'farmacias' => 'Farmacias',
        'gastronomia' => 'Gastronomía',
        'centros_salud' => 'Centros de Salud',
        // 'hospedaje' => 'Hospedaje',
        // 'servicios' => 'Servicios',
        // 'comercios' => 'Comercios',
        // 'entretenimiento' => 'Entretenimiento',
    ];

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    // Accessors
    public function getCategoryNameAttribute()
    {
        return self::CATEGORIES[$this->category] ?? $this->category;
    }

    public function getFormattedPhonesAttribute()
    {
        if (!$this->phones) return null;
        return is_array($this->phones) ? implode(' / ', $this->phones) : $this->phones;
    }

    public function getFormattedMobilesAttribute()
    {
        if (!$this->mobiles) return null;
        return is_array($this->mobiles) ? implode(' / ', $this->mobiles) : $this->mobiles;
    }

    public function getWhatsappLinkAttribute()
    {
        if (!$this->whatsapp) return null;
        $number = preg_replace('/[^0-9]/', '', $this->whatsapp);
        return "https://wa.me/{$number}";
    }

    public function getHasContactInfoAttribute()
    {
        return $this->phones || $this->mobiles || $this->email || $this->whatsapp;
    }

    public function getHasSocialMediaAttribute()
    {
        return $this->facebook || $this->instagram || $this->website;
    }

    public function getOperatingHoursAttribute()
    {
        if (!$this->opening_time || !$this->closing_time) return null;
        return $this->opening_time . ' - ' . $this->closing_time;
    }

    public function getOperatingDaysAttribute()
    {
        if (!$this->opening_days) return null;

        $days = [
            'monday' => 'Lunes',
            'tuesday' => 'Martes',
            'wednesday' => 'Miércoles',
            'thursday' => 'Jueves',
            'friday' => 'Viernes',
            'saturday' => 'Sábado',
            'sunday' => 'Domingo'
        ];

        $openDays = array_intersect_key($days, array_flip($this->opening_days));
        return implode(', ', $openDays);
    }
}
