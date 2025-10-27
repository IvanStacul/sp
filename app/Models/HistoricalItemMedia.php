<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricalItemMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'historical_item_id',
        'media_type',
        'url',
        'title',
        'description',
        'thumbnail_url',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function historicalItem()
    {
        return $this->belongsTo(HistoricalItem::class);
    }

    /**
     * Extraer el ID de video de YouTube de una URL
     */
    public function getYoutubeVideoId()
    {
        if ($this->media_type !== 'youtube') {
            return null;
        }

        $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i';
        
        if (preg_match($pattern, $this->url, $matches)) {
            return $matches[1];
        }

        return null;
    }

    /**
     * Obtener la URL del thumbnail de YouTube
     */
    public function getYoutubeThumbnail()
    {
        $videoId = $this->getYoutubeVideoId();
        
        if ($videoId) {
            return "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg";
        }

        return null;
    }

    /**
     * Obtener la URL de embed de YouTube
     */
    public function getYoutubeEmbedUrl()
    {
        $videoId = $this->getYoutubeVideoId();
        
        if ($videoId) {
            return "https://www.youtube.com/embed/{$videoId}";
        }

        return null;
    }
}
