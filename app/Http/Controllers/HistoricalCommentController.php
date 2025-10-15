<?php

namespace App\Http\Controllers;

use App\Models\HistoricalItem;
use App\Models\HistoricalComment;
use App\Http\Requests\StoreHistoricalCommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth;

class HistoricalCommentController extends Controller
{
    /**
     * Almacenar un nuevo comentario
     */
    public function store(StoreHistoricalCommentRequest $request, HistoricalItem $historicalItem)
    {
        // Verificar rate limiting usando la configuración
        $rateLimit = config('comments.rate_limit', 3);
        $rateLimitDecay = config('comments.rate_limit_decay', 3600);
        $key = 'comment-submit-' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($key, $rateLimit)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = ceil($seconds / 60);
            
            return back()->with('error', "Has excedido el límite de comentarios. Por favor intenta de nuevo en {$minutes} minuto(s).");
        }

        $validated = $request->validated();

        // Crear el comentario
        $comment = new HistoricalComment();
        $comment->historical_item_id = $historicalItem->id;
        $comment->user_id = Auth::id();
        $comment->name = Auth::check() ? Auth::user()->name : $validated['name'];
        $comment->email = Auth::check() ? Auth::user()->email : $validated['email'];
        $comment->comment = $validated['comment'];
        $comment->ip_address = $request->ip();
        $comment->status = config('comments.require_approval', true) ? 'pending' : 'approved';
        $comment->save();

        // Incrementar el contador de rate limiting
        RateLimiter::hit($key, $rateLimitDecay);

        return back()->with('success', 'Tu comentario ha sido enviado y está pendiente de moderación. Será visible una vez que sea aprobado por nuestro equipo.');
    }
}
