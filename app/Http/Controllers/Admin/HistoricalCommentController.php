<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoricalComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoricalCommentController extends Controller
{
    /**
     * Mostrar todos los comentarios para moderación
     */
    public function index(Request $request)
    {
        $status = $request->get('status', 'pending');
        
        $comments = HistoricalComment::with(['historicalItem', 'user'])
            ->when($status !== 'all', function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $pendingCount = HistoricalComment::pending()->count();
        $approvedCount = HistoricalComment::approved()->count();
        $rejectedCount = HistoricalComment::rejected()->count();

        return view('admin.historical-comments.index', compact('comments', 'status', 'pendingCount', 'approvedCount', 'rejectedCount'));
    }

    /**
     * Aprobar un comentario
     */
    public function approve(Request $request, HistoricalComment $historicalComment)
    {
        $historicalComment->approve(Auth::id());

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Comentario aprobado exitosamente.',
                'comment' => [
                    'id' => $historicalComment->id,
                    'status' => $historicalComment->status,
                    'approved_at' => $historicalComment->approved_at?->format('d/m/Y H:i'),
                ]
            ]);
        }

        return back()->with('success', 'Comentario aprobado exitosamente.');
    }

    /**
     * Rechazar un comentario
     */
    public function reject(Request $request, HistoricalComment $historicalComment)
    {
        $validated = $request->validate([
            'reason' => 'nullable|string|max:500'
        ]);

        $historicalComment->reject($validated['reason'] ?? null, Auth::id());

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Comentario rechazado exitosamente.',
                'comment' => [
                    'id' => $historicalComment->id,
                    'status' => $historicalComment->status,
                    'rejection_reason' => $historicalComment->rejection_reason,
                ]
            ]);
        }

        return back()->with('success', 'Comentario rechazado exitosamente.');
    }

    /**
     * Eliminar un comentario
     */
    public function destroy(Request $request, HistoricalComment $historicalComment)
    {
        $commentId = $historicalComment->id;
        $historicalComment->delete();

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Comentario eliminado exitosamente.',
                'comment_id' => $commentId
            ]);
        }

        return back()->with('success', 'Comentario eliminado exitosamente.');
    }

    /**
     * Aprobar múltiples comentarios
     */
    public function bulkApprove(Request $request)
    {
        $validated = $request->validate([
            'comment_ids' => 'required|array',
            'comment_ids.*' => 'exists:historical_comments,id'
        ]);

        HistoricalComment::whereIn('id', $validated['comment_ids'])
            ->update([
                'status' => 'approved',
                'approved_at' => now(),
                'approved_by' => Auth::id()
            ]);

        return back()->with('success', count($validated['comment_ids']) . ' comentarios aprobados exitosamente.');
    }

    /**
     * Eliminar múltiples comentarios
     */
    public function bulkDelete(Request $request)
    {
        $validated = $request->validate([
            'comment_ids' => 'required|array',
            'comment_ids.*' => 'exists:historical_comments,id'
        ]);

        HistoricalComment::whereIn('id', $validated['comment_ids'])->delete();

        return back()->with('success', count($validated['comment_ids']) . ' comentarios eliminados exitosamente.');
    }
}
