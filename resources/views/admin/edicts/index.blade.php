@extends('admin.layouts.app')

@section('content-title', __('edicts.titles.index'))

@push('styles')
  {{-- DataTables --}}
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('main-content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="card-title">{{ __('edicts.titles.index') }}</h3>
            </div>
            <div class="col-auto">
              <a href="{{ route('admin.edicts.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                {{ __('edicts.actions.create') }}
              </a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="dataTable">
              <thead>
                <tr>
                  <th>{{ __('edicts.table.headers.id') }}</th>
                  <th>{{ __('edicts.table.headers.title') }}</th>
                  <th>{{ __('edicts.table.headers.publish_date') }}</th>
                  <th>{{ __('edicts.table.headers.is_active') }}</th>
                  <th>{{ __('edicts.table.headers.actions') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($edicts as $edict)
                  <tr>
                    <td>{{ $edict->id }}</td>
                    <td>{{ $edict->title }}</td>
                    <td>{{ $edict->edict_date }}</td>
                    <td>
                      @if ($edict->is_active)
                        <span class="badge badge-success">
                          {{ __('edicts.table.values.active') }}
                        </span>
                      @else
                        <span class="badge badge-danger">
                          {{ __('edicts.table.values.inactive') }}
                        </span>
                      @endif
                    </td>
                    <td>
                      <div class="d-flex justify-content-around">
                        <a href="{{ route('admin.edicts.show', $edict) }}" class="btn btn-primary"
                          title="{{ __('edicts.tooltips.show') }}">
                          <i class="fas fa-eye"></i>
                        </a>

                        <a href="{{ route('admin.edicts.edit', $edict) }}" class="btn btn-info"
                          title="{{ __('edicts.tooltips.edit') }}">
                          <i class="fas fa-edit"></i>
                        </a>

                        @if ($edict->is_active)
                          <form action="{{ route('admin.edicts.deactivate', $edict) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-warning"
                              title="{{ __('edicts.tooltips.deactivate') }}">
                              <i class="fas fa-eye-slash"></i>
                            </button>
                          </form>
                        @else
                          <form action="{{ route('admin.edicts.activate', $edict) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success"
                              title="{{ __('edicts.tooltips.activate') }}">
                              <i class="fas fa-eye"></i>
                            </button>
                          </form>
                        @endif

                        <form action="{{ route('admin.edicts.destroy', $edict) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger delete-btn"
                            title="{{ __('edicts.tooltips.delete') }}"
                            data-title="{{ __('edicts.alerts.delete.title') }}"
                            data-text="{{ __('edicts.alerts.delete.text') }}"
                            data-confirm="{{ __('edicts.alerts.delete.confirm') }}"
                            data-cancel="{{ __('edicts.alerts.delete.cancel') }}">
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  {{-- DataTables --}}
  <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable({
        "order": [
          [0, "desc"]
        ],
        "language": {
          "url": "{{ asset('admin/plugins/datatables/lang/es-ES.json') }}"
        }
      });

      // Confirmación para eliminar
      $('.delete-btn').on('click', function(e) {
        e.preventDefault();

        const form = $(this).closest('form');
        const title = $(this).data('title');
        const text = $(this).data('text');
        const confirmText = $(this).data('confirm');
        const cancelText = $(this).data('cancel');

        Swal.fire({
          title: title,
          text: text,
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: confirmText,
          cancelButtonText: cancelText
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        });
      });
    });
  </script>
@endpush
