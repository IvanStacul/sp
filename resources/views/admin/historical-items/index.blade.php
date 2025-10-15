@extends('admin.layouts.app')

@push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content-title', 'Archivo Histórico')

@section('main-content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Elementos Históricos</h3>
      <div class="card-tools">
        <a href="{{ route('admin.historical-items.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> Crear Elemento
        </a>
      </div>
    </div>

    <div class="card-body">
      <table id="historical-items-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Título</th>
            <th>Categoría</th>
            <th>Imagen</th>
            <th>Destacado</th>
            <th>Orden</th>
            <th>Estado</th>
            <th class="text-center">Acciones</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($historicalItems as $item)
            <tr>
              <td>{{ $item->title }}</td>
              <td>
                @if($item->category)
                  <span class="badge" style="background-color: {{ $item->category->color }}; color: white;">
                    @if($item->category->icon)
                      <i class="{{ $item->category->icon }}"></i>
                    @endif
                    {{ $item->category->name }}
                  </span>
                @else
                  <span class="badge badge-secondary">Sin categoría</span>
                @endif
              </td>
              <td>
                @if ($item->image_path)
                  <img src="{{ asset($item->image_path) }}" alt="{{ $item->title }}"
                    style="width: 60px; height: 40px; object-fit: cover;" class="rounded">
                @else
                  <span class="text-muted">Sin imagen</span>
                @endif
              </td>
              <td>
                @if ($item->featured)
                  <span class="badge badge-warning">Destacado</span>
                @else
                  <span class="badge badge-secondary">Normal</span>
                @endif
              </td>
              <td>{{ $item->sort_order }}</td>
              <td>
                @if ($item->is_active)
                  <span class="badge badge-success">Activo</span>
                @else
                  <span class="badge badge-danger">Inactivo</span>
                @endif
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <a href="{{ route('admin.historical-items.show', $item) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{ route('admin.historical-items.edit', $item) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>

                  @if ($item->is_active)
                    <form action="{{ route('admin.historical-items.deactivate', $item) }}" method="POST"
                      style="display: inline;">
                      @csrf
                      @method('POST')
                      <button type="submit" class="btn btn-secondary btn-sm" title="Desactivar">
                        <i class="fas fa-toggle-on"></i>
                      </button>
                    </form>
                  @else
                    <form action="{{ route('admin.historical-items.activate', $item) }}" method="POST"
                      style="display: inline;">
                      @csrf
                      @method('POST')
                      <button type="submit" class="btn btn-success btn-sm" title="Activar">
                        <i class="fas fa-toggle-off"></i>
                      </button>
                    </form>
                  @endif

                  <form action="{{ route('admin.historical-items.destroy', $item) }}" method="POST"
                    style="display: inline;" id="delete-form-{{ $item->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('delete-form-{{ $item->id }}')" title="Eliminar">
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
      $("#historical-items-table").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        language: {
          url: "{{ asset('admin/plugins/datatables/lang/es-ES.json') }}"
        },
        columns: [
          { orderable: true },   // Título
          { orderable: true },   // Categoría
          { orderable: false },  // Imagen
          { orderable: true },   // Destacado
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
        text: "Esta acción no se puede deshacer. Se eliminará el elemento histórico permanentemente.",
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
