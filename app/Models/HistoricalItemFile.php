<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricalItemFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'historical_item_id',
        'file_type',
        'file_path',
        'file_name',
        'original_name',
        'display_name',
        'mime_type',
        'file_size',
        'description',
        'sort_order',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'file_size' => 'integer',
    ];

    /**
     * Relación con el item histórico
     */
    public function historicalItem()
    {
        return $this->belongsTo(HistoricalItem::class);
    }

    /**
     * Scope para obtener solo imágenes
     */
    public function scopeImages($query)
    {
        return $query->where('file_type', 'image');
    }

    /**
     * Scope para obtener solo PDFs
     */
    public function scopePdfs($query)
    {
        return $query->where('file_type', 'pdf');
    }

    /**
     * Scope para obtener archivo destacado
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Obtener la URL pública del archivo
     */
    public function getUrlAttribute()
    {
        return asset($this->file_path);
    }

    /**
     * Obtener el tamaño del archivo formateado
     */
    public function getFormattedSizeAttribute()
    {
        if (!$this->file_size) {
            return 'N/A';
        }

        $units = ['B', 'KB', 'MB', 'GB'];
        $size = $this->file_size;
        $unitIndex = 0;

        while ($size >= 1024 && $unitIndex < count($units) - 1) {
            $size /= 1024;
            $unitIndex++;
        }

        return round($size, 2) . ' ' . $units[$unitIndex];
    }

    /**
     * Obtener el nombre de visualización del archivo
     * Si no hay display_name, usa el original_name sin extensión
     */
    public function getDisplayNameAttribute($value)
    {
        if ($value) {
            return $value;
        }

        // Si no hay display_name, usar original_name sin extensión
        if ($this->original_name) {
            return pathinfo($this->original_name, PATHINFO_FILENAME);
        }

        return 'Descargar PDF';
    }

    /**
     * Verificar si el archivo es una imagen
     */
    public function isImage()
    {
        return $this->file_type === 'image';
    }

    /**
     * Verificar si el archivo es un PDF
     */
    public function isPdf()
    {
        return $this->file_type === 'pdf';
    }
}
