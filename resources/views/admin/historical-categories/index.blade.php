@extends('admin.layouts.app')

@push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content-title', 'Categorías Históricas')

@section('main-content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Categorías Históricas</h3>
      <div class="card-tools">
        <a href="{{ route('admin.historical-categories.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> Crear Categoría
        </a>
      </div>
    </div>

    <div class="card-body">
      <table id="categories-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Elementos</th>
            <th>Orden</th>
            <th>Estado</th>
            <th class="text-center">Acciones</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>
                <span class="badge" style="background-color: {{ $category->color }}; color: white;">
                  @if ($category->icon)
                    <i class="{{ $category->icon }}"></i>
                  @endif
                  {{ $category->name }}
                </span>
              </td>
              <td>
                <span class="badge badge-info">{{ $category->historical_items_count ?? 0 }}</span>
              </td>
              <td>{{ $category->sort_order }}</td>
              <td>
                @if ($category->is_active)
                  <span class="badge badge-success">Activa</span>
                @else
                  <span class="badge badge-danger">Inactiva</span>
                @endif
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <a href="{{ route('admin.historical-categories.show', $category) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{ route('admin.historical-categories.edit', $category) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>

                  @if ($category->is_active)
                    <form action="{{ route('admin.historical-categories.deactivate', $category) }}" method="POST"
                      style="display: inline;">
                      @csrf
                      @method('POST')
                      <button type="submit" class="btn btn-secondary btn-sm" title="Desactivar">
                        <i class="fas fa-toggle-on"></i>
                      </button>
                    </form>
                  @else
                    <form action="{{ route('admin.historical-categories.activate', $category) }}" method="POST"
                      style="display: inline;">
                      @csrf
                      @method('POST')
                      <button type="submit" class="btn btn-success btn-sm" title="Activar">
                        <i class="fas fa-toggle-off"></i>
                      </button>
                    </form>
                  @endif

                  <form action="{{ route('admin.historical-categories.destroy', $category) }}" method="POST"
                    style="display: inline;" id="delete-form-{{ $category->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('delete-form-{{ $category->id }}')" title="Eliminar">
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
@endsection

@push('scripts')
  <!-- DataTables -->
  <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

  <script>
    $(function() {
      $("#categories-table").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        language: {
          url: "{{ asset('admin/plugins/datatables/lang/es-ES.json') }}"
        },
        columns: [
          { orderable: true },   // Nombre
          { orderable: false },  // Elementos
          { orderable: true },   // Orden
          { orderable: true },   // Estado
          { orderable: false }   // Acciones
        ],
      });

      @if (session()->has('success'))
        Swal.fire({
          title: 'Éxito',
          text: '{{ session('success') }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      @endif
    });

    function confirmDelete(formId) {
      let form = document.getElementById(formId);

      Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción no se puede deshacer. Se eliminará la categoría y todos sus elementos asociados.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    }
  </script>
@endpush
