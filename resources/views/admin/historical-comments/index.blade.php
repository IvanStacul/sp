@extends('admin.layouts.app')

@push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <style>
    .alert-sm {
      padding: 0.375rem 0.75rem;
      font-size: 0.875rem;
    }
  </style>
@endpush

@section('content-title', 'Moderación de Comentarios')

@section('main-content')
  <!-- Stats Cards -->
  <div class="row mb-3">
    <div class="col-md-4">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $pendingCount }}</h3>
          <p>Pendientes</p>
        </div>
        <div class="icon">
          <i class="fas fa-clock"></i>
        </div>
        <a href="{{ route('admin.historical-comments.index', ['status' => 'pending']) }}" class="small-box-footer">
          Ver pendientes <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $approvedCount }}</h3>
          <p>Aprobados</p>
        </div>
        <div class="icon">
          <i class="fas fa-check"></i>
        </div>
        <a href="{{ route('admin.historical-comments.index', ['status' => 'approved']) }}" class="small-box-footer">
          Ver aprobados <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $rejectedCount }}</h3>
          <p>Rechazados</p>
        </div>
        <div class="icon">
          <i class="fas fa-times"></i>
        </div>
        <a href="{{ route('admin.historical-comments.index', ['status' => 'rejected']) }}" class="small-box-footer">
          Ver rechazados <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Comentarios del Archivo Histórico</h3>
      <div class="card-tools">
        <!-- Filter Buttons -->
        <div class="btn-group">
          <a href="{{ route('admin.historical-comments.index', ['status' => 'all']) }}"
            class="btn btn-sm {{ $status === 'all' ? 'btn-primary' : 'btn-default' }}">
            Todos
          </a>
          <a href="{{ route('admin.historical-comments.index', ['status' => 'pending']) }}"
            class="btn btn-sm {{ $status === 'pending' ? 'btn-warning' : 'btn-default' }}">
            Pendientes ({{ $pendingCount }})
          </a>
          <a href="{{ route('admin.historical-comments.index', ['status' => 'approved']) }}"
            class="btn btn-sm {{ $status === 'approved' ? 'btn-success' : 'btn-default' }}">
            Aprobados
          </a>
          <a href="{{ route('admin.historical-comments.index', ['status' => 'rejected']) }}"
            class="btn btn-sm {{ $status === 'rejected' ? 'btn-danger' : 'btn-default' }}">
            Rechazados
          </a>
        </div>
      </div>
    </div>

    <div class="card-body">
      @if ($comments->count() > 0)
        <form id="bulk-actions-form" method="POST">
          @csrf
          <div class="mb-3">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-success" onclick="bulkApprove()">
                <i class="fas fa-check"></i> Aprobar seleccionados
              </button>
              <button type="button" class="btn btn-sm btn-danger" onclick="bulkDelete()">
                <i class="fas fa-trash"></i> Eliminar seleccionados
              </button>
            </div>
            <button type="button" class="btn btn-sm btn-secondary float-right" onclick="toggleAll()">
              <i class="fas fa-check-square"></i> Seleccionar/Deseleccionar todos
            </button>
          </div>

          <table id="comments-table" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="30">
                  <input type="checkbox" id="select-all">
                </th>
                <th>Autor</th>
                <th>Comentario</th>
                <th>Item Histórico</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th class="text-center" width="200">Acciones</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($comments as $comment)
                <tr>
                  <td>
                    <input type="checkbox" name="comment_ids[]" value="{{ $comment->id }}" class="comment-checkbox">
                  </td>
                  <td>
                    <strong>{{ $comment->author_name }}</strong><br>
                    <small class="text-muted">{{ $comment->email }}</small><br>
                    <small class="text-muted">IP: {{ $comment->ip_address }}</small>
                  </td>
                  <td>
                    <p class="mb-1">{{ Str::limit($comment->comment, 150) }}</p>
                    @if (strlen($comment->comment) > 150)
                      <button type="button" class="btn btn-xs btn-link" data-toggle="modal"
                        data-target="#comment-modal-{{ $comment->id }}">
                        Ver completo
                      </button>
                    @endif
                    @if ($comment->rejection_reason)
                      <div class="alert alert-danger alert-sm mt-2 mb-0">
                        <strong>Razón de rechazo:</strong> {{ $comment->rejection_reason }}
                      </div>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('historical.show', $comment->historicalItem->slug) }}" target="_blank">
                      {{ Str::limit($comment->historicalItem->title, 50) }}
                      <i class="fas fa-external-link-alt"></i>
                    </a>
                  </td>
                  <td>
                    @if ($comment->status === 'pending')
                      <span class="badge badge-warning">Pendiente</span>
                    @elseif($comment->status === 'approved')
                      <span class="badge badge-success">Aprobado</span>
                    @else
                      <span class="badge badge-danger">Rechazado</span>
                    @endif
                  </td>
                  <td>
                    <small>{{ $comment->created_at->format('d/m/Y H:i') }}</small><br>
                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                  </td>
                  <td class="text-center">
                    @if ($comment->status !== 'approved')
                      <button type="button" class="btn btn-success btn-sm approve-btn"
                        data-comment-id="{{ $comment->id }}"
                        data-url="{{ route('admin.historical-comments.approve', $comment) }}" title="Aprobar">
                        <i class="fas fa-check"></i>
                      </button>
                    @endif

                    @if ($comment->status !== 'rejected')
                      <button type="button" class="btn btn-warning btn-sm reject-btn"
                        data-comment-id="{{ $comment->id }}"
                        data-url="{{ route('admin.historical-comments.reject', $comment) }}" data-toggle="modal"
                        data-target="#reject-modal-{{ $comment->id }}" title="Rechazar">
                        <i class="fas fa-times"></i>
                      </button>
                    @endif

                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                      data-comment-id="{{ $comment->id }}"
                      data-url="{{ route('admin.historical-comments.destroy', $comment) }}" title="Eliminar">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>

                <!-- Modal para ver comentario completo -->
                @if (strlen($comment->comment) > 150)
                  <div class="modal fade" id="comment-modal-{{ $comment->id }}" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Comentario de {{ $comment->author_name }}</h5>
                          <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>{{ $comment->comment }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif

                <!-- Modal para rechazar comentario -->
                <div class="modal fade" id="reject-modal-{{ $comment->id }}" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Rechazar Comentario</h5>
                        <button type="button" class="close" data-dismiss="modal">
                          <span>&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="reason-{{ $comment->id }}">Razón del rechazo (opcional):</label>
                          <textarea id="reason-{{ $comment->id }}" class="form-control reject-reason" rows="3"
                            placeholder="Ej: Contenido ofensivo, No relacionado con el tema, etc."></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-warning confirm-reject-btn"
                          data-comment-id="{{ $comment->id }}"
                          data-url="{{ route('admin.historical-comments.reject', $comment) }}">
                          Rechazar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </tbody>
          </table>
        </form>

        <div class="mt-3">
          {{ $comments->links() }}
        </div>
      @else
        <div class="alert alert-info">
          <i class="fas fa-info-circle"></i> No hay comentarios {{ $status !== 'all' ? $status : '' }}.
        </div>
      @endif
    </div>
  </div>
@endsection

@push('scripts')
  <!-- DataTables -->
  <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

  <script>
    $(document).ready(function() {
      // Setup CSRF token for AJAX requests
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      // Select all checkbox
      $('#select-all').on('change', function() {
        $('.comment-checkbox').prop('checked', this.checked);
      });

      // Approve individual comment
      $('.approve-btn').on('click', function(e) {
        e.preventDefault();
        const commentId = $(this).data('comment-id');
        const url = $(this).data('url');
        const button = $(this);

        Swal.fire({
          title: '¿Aprobar comentario?',
          text: "Este comentario será visible para todos los usuarios",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#28a745',
          cancelButtonColor: '#6c757d',
          confirmButtonText: '<i class="fas fa-check"></i> Sí, aprobar',
          cancelButtonText: '<i class="fas fa-times"></i> Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            // Disable button
            button.prop('disabled', true);

            $.ajax({
              url: url,
              type: 'PATCH',
              success: function(response) {
                Swal.fire({
                  icon: 'success',
                  title: '¡Éxito!',
                  text: response.message,
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true
                });

                // Update row status badge
                const row = button.closest('tr');
                row.find('.badge').removeClass('badge-warning badge-danger').addClass('badge-success')
                  .text('Aprobado');

                // Remove approve button
                button.remove();
              },
              error: function(xhr) {
                button.prop('disabled', false);
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: xhr.responseJSON?.message || 'Error al aprobar el comentario',
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true
                });
              }
            });
          }
        });
      });

      // Show reject modal
      $('.reject-btn').on('click', function() {
        // Modal ya se abre automáticamente con data-toggle="modal"
      });

      // Confirm reject from modal
      $('.confirm-reject-btn').on('click', function() {
        const commentId = $(this).data('comment-id');
        const url = $(this).data('url');
        const reason = $('#reason-' + commentId).val();
        const button = $(this);

        // Disable button
        button.prop('disabled', true);

        $.ajax({
          url: url,
          type: 'PATCH',
          data: {
            reason: reason
          },
          success: function(response) {
            // Close modal
            $('#reject-modal-' + commentId).modal('hide');

            Swal.fire({
              icon: 'success',
              title: '¡Éxito!',
              text: response.message,
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true
            });

            // Update row status badge
            const row = $('button[data-comment-id="' + commentId + '"]').first().closest('tr');
            row.find('.badge').removeClass('badge-warning badge-success').addClass('badge-danger').text(
              'Rechazado');

            // Remove reject button
            row.find('.reject-btn').remove();
          },
          error: function(xhr) {
            button.prop('disabled', false);
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: xhr.responseJSON?.message || 'Error al rechazar el comentario',
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true
            });
          }
        });
      });

      // Delete individual comment
      $('.delete-btn').on('click', function(e) {
        e.preventDefault();
        const commentId = $(this).data('comment-id');
        const url = $(this).data('url');
        const button = $(this);

        Swal.fire({
          title: '¿Eliminar comentario?',
          text: "Esta acción no se puede deshacer",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#dc3545',
          cancelButtonColor: '#6c757d',
          confirmButtonText: '<i class="fas fa-trash"></i> Sí, eliminar',
          cancelButtonText: '<i class="fas fa-times"></i> Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            // Disable button
            button.prop('disabled', true);

            $.ajax({
              url: url,
              type: 'DELETE',
              success: function(response) {
                Swal.fire({
                  icon: 'success',
                  title: '¡Éxito!',
                  text: response.message,
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true
                });

                // Remove row with animation
                const row = button.closest('tr');
                row.fadeOut(300, function() {
                  $(this).remove();
                });
              },
              error: function(xhr) {
                button.prop('disabled', false);
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: xhr.responseJSON?.message || 'Error al eliminar el comentario',
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true
                });
              }
            });
          }
        });
      });

      // Show success/error messages from session
      @if (session('success'))
        Swal.fire({
          icon: 'success',
          title: '¡Éxito!',
          text: '{{ session('success') }}',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true
        });
      @endif

      @if (session('error'))
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: '{{ session('error') }}',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true
        });
      @endif
    });

    function toggleAll() {
      const checkboxes = document.querySelectorAll('.comment-checkbox');
      const allChecked = Array.from(checkboxes).every(cb => cb.checked);
      checkboxes.forEach(cb => cb.checked = !allChecked);
    }

    function bulkApprove() {
      const form = document.getElementById('bulk-actions-form');
      const checkedBoxes = document.querySelectorAll('.comment-checkbox:checked');

      if (checkedBoxes.length === 0) {
        Swal.fire({
          icon: 'warning',
          title: 'Atención',
          text: 'Por favor selecciona al menos un comentario',
          confirmButtonText: 'Entendido'
        });
        return;
      }

      Swal.fire({
        title: `¿Aprobar ${checkedBoxes.length} comentario(s)?`,
        text: "Los comentarios seleccionados serán visibles para todos los usuarios",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#6c757d',
        confirmButtonText: '<i class="fas fa-check"></i> Sí, aprobar',
        cancelButtonText: '<i class="fas fa-times"></i> Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          form.action = '{{ route('admin.historical-comments.bulk-approve') }}';
          form.submit();
        }
      });
    }

    function bulkDelete() {
      const form = document.getElementById('bulk-actions-form');
      const checkedBoxes = document.querySelectorAll('.comment-checkbox:checked');

      if (checkedBoxes.length === 0) {
        Swal.fire({
          icon: 'warning',
          title: 'Atención',
          text: 'Por favor selecciona al menos un comentario',
          confirmButtonText: 'Entendido'
        });
        return;
      }

      Swal.fire({
        title: `¿Eliminar ${checkedBoxes.length} comentario(s)?`,
        text: "Esta acción no se puede deshacer",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: '<i class="fas fa-trash"></i> Sí, eliminar',
        cancelButtonText: '<i class="fas fa-times"></i> Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          form.action = '{{ route('admin.historical-comments.bulk-delete') }}';
          form.method = 'POST';
          const methodInput = document.createElement('input');
          methodInput.type = 'hidden';
          methodInput.name = '_method';
          methodInput.value = 'DELETE';
          form.appendChild(methodInput);
          form.submit();
        }
      });
    }
  </script>
@endpush
