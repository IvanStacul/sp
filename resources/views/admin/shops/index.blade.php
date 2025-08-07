@extends('admin.layouts.app')

@push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('styles')
  {{-- DataTables --}}
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content-title', 'Gestión de Comercios')

@section('main-content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Gestión de Comercios</h3>
      <div class="card-tools">
        <a href="{{ route('admin.shops.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> Nuevo Comercio
        </a>
      </div>
    </div>

    <div class="card-body">
      {{-- Filtros --}}
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="filter-category" class="form-label">Filtrar por categoría:</label>
          <select id="filter-category" class="form-control">
            <option value="">Todas las categorías</option>
            @foreach (\App\Models\Shop::CATEGORIES as $key => $label)
              <option value="{{ $key }}">{{ $label }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-4">
          <label for="filter-status" class="form-label">Filtrar por estado:</label>
          <select id="filter-status" class="form-control">
            <option value="">Todos los estados</option>
            <option value="1">Activos</option>
            <option value="0">Inactivos</option>
          </select>
        </div>
      </div>

      <table id="shops-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Imagen</th>
            <th>Comercio</th>
            <th>Categoría</th>
            <th>Contacto</th>
            <th>Estado</th>
            <th>Orden</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($shops as $shop)
            <tr>
              <td class="text-center">
                @if ($shop->image)
                  <img src="{{ asset('storage/' . $shop->image) }}" alt="{{ $shop->name }}" class="img-thumbnail"
                    style="width: 50px; height: 50px; object-fit: cover;">
                @else
                  <i class="fas fa-store fa-2x text-muted"></i>
                @endif
              </td>
              <td>
                <strong>{{ $shop->name }}</strong><br>
                <small class="text-muted">{{ $shop->address }}</small>
              </td>
              <td>
                <span class="badge badge-info">
                  {{ \App\Models\Shop::CATEGORIES[$shop->category] ?? $shop->category }}
                </span>
              </td>
              <td>
                @if ($shop->formatted_phones)
                  <div><i class="fas fa-phone"></i> {{ $shop->formatted_phones }}</div>
                @endif
                @if ($shop->email)
                  <div><i class="fas fa-envelope"></i> {{ $shop->email }}</div>
                @endif
                @if ($shop->whatsapp)
                  <div><i class="fab fa-whatsapp text-success"></i> {{ $shop->whatsapp }}</div>
                @endif
              </td>
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input status-toggle" id="switch-{{ $shop->id }}"
                    data-shop-id="{{ $shop->id }}" {{ $shop->is_active ? 'checked' : '' }}>
                  <label class="custom-control-label" for="switch-{{ $shop->id }}">
                    <span class="badge {{ $shop->is_active ? 'badge-success' : 'badge-secondary' }}">
                      {{ $shop->is_active ? 'Activo' : 'Inactivo' }}
                    </span>
                  </label>
                </div>
              </td>
              <td class="text-center">
                <span class="badge badge-primary">{{ $shop->sort_order }}</span>
              </td>
              <td>
                <div class="btn-group" role="group">

                  <a href="{{ route('admin.shops.edit', $shop) }}" class="btn btn-sm btn-warning" title="Editar">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="{{ route('admin.shops.destroy', $shop) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('¿Estás seguro de que quieres eliminar este comercio?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
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

  {{-- Modal para detalles --}}
  <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailsModalLabel">Detalles del Comercio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-content">
          {{-- Contenido cargado dinámicamente --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Estadísticas rápidas --}}
  <div class="row mt-3">
    @foreach (\App\Models\Shop::CATEGORIES as $key => $label)
      @php
        $count = \App\Models\Shop::byCategory($key)->active()->count();
      @endphp
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $count }}</h3>
            <p>{{ $label }}</p>
          </div>
          <div class="icon">
            <i class="fas fa-store"></i>
          </div>
        </div>
      </div>
    @endforeach
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
      // Inicializar DataTable
      var table = $('#shops-table').DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        language: {
          url: "{{ asset('admin/plugins/datatables/lang/es-ES.json') }}",
        },
        order: [
          [5, 'desc']
        ], // Ordenar por columna "Orden" descendente
        columnDefs: [{
            orderable: false,
            targets: [0, 6]
          } // Imagen y Acciones no ordenables
        ]
      });

      // Filtros
      $('#filter-category').on('change', function() {
        var category = this.value;
        table.column(2).search(category).draw();
      });

      $('#filter-status').on('change', function() {
        var status = this.value;
        if (status === '') {
          table.column(4).search('').draw();
        } else if (status === '1') {
          table.column(4).search('Activo').draw();
        } else {
          table.column(4).search('Inactivo').draw();
        }
      });

      // Toggle de estado
      $('.status-toggle').on('change', function() {
        var shopId = $(this).data('shop-id');
        var isActive = $(this).is(':checked');
        var toggle = this;

        $.ajax({
          url: '/admin/shops/' + shopId + '/toggle-status',
          type: 'POST',
          data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            is_active: isActive ? 1 : 0
          },
          success: function(response) {
            var label = $(toggle).siblings('label').find('.badge');
            if (isActive) {
              label.removeClass('badge-secondary').addClass('badge-success').text('Activo');
            } else {
              label.removeClass('badge-success').addClass('badge-secondary').text('Inactivo');
            }

            // Mostrar notificación
            if (typeof toastr !== 'undefined') {
              toastr.success('Estado actualizado correctamente');
            }
          },
          error: function(xhr) {
            // Revertir el toggle en caso de error
            $(toggle).prop('checked', !isActive);
            if (typeof toastr !== 'undefined') {
              toastr.error('Error al actualizar el estado');
            } else {
              alert('Error al actualizar el estado');
            }
          }
        });
      });
    });

  </script>
@endpush
