<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricalComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'historical_item_id',
        'user_id',
        'name',
        'email',
        'comment',
        'status',
        'ip_address',
        'rejection_reason',
        'approved_at',
        'approved_by'
    ];

    protected $casts = [
        'approved_at' => 'datetime',
    ];

    /**
     * Relación con el item histórico
     */
    public function historicalItem()
    {
        return $this->belongsTo(HistoricalItem::class);
    }

    /**
     * Relación con el usuario que comentó (si está autenticado)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con el moderador que aprobó
     */
    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    /**
     * Scope para comentarios aprobados
     */
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    /**
     * Scope para comentarios pendientes
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope para comentarios rechazados
     */
    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }

    /**
     * Aprobar comentario
     */
    public function approve($userId = null)
    {
        $this->update([
            'status' => 'approved',
            'approved_at' => now(),
            'approved_by' => $userId,
            'rejection_reason' => null
        ]);
    }

    /**
     * Rechazar comentario
     */
    public function reject($reason = null, $userId = null)
    {
        $this->update([
            'status' => 'rejected',
            'rejection_reason' => $reason,
            'approved_at' => null,
            'approved_by' => $userId
        ]);
    }

    /**
     * Obtener el nombre del autor
     */
    public function getAuthorNameAttribute()
    {
        return $this->user ? $this->user->name : $this->name;
    }

    /**
     * Verificar si el comentario contiene palabras prohibidas
     */
    public static function containsBadWords($text)
    {
        $badWords = config('comments.bad_words', []);

        foreach ($badWords as $word) {
            if (stripos($text, $word) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Limpiar el comentario de posibles scripts maliciosos
     */
    public function setCommentAttribute($value)
    {
        $this->attributes['comment'] = strip_tags($value);
    }
}
