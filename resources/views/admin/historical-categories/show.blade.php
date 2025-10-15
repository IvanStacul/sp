@extends('admin.layouts.app')

@section('content-title', 'Ver Categoría Histórica')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">{{ $historicalCategory->name }}</h3>
          <div class="card-tools">
            <a href="{{ route('admin.historical-categories.edit', $historicalCategory) }}" class="btn btn-warning btn-sm">
              <i class="fas fa-edit"></i> Editar
            </a>
            <a href="{{ route('admin.historical-categories.index') }}" class="btn btn-secondary btn-sm">
              <i class="fas fa-arrow-left"></i> Volver
            </a>
          </div>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label><strong>Nombre:</strong></label>
                <p>
                  <span class="badge"
                    style="background-color: {{ $historicalCategory->color }}; color: white; font-size: 16px; padding: 8px 12px;">
                    @if ($historicalCategory->icon)
                      <i class="{{ $historicalCategory->icon }}"></i>
                    @endif
                    {{ $historicalCategory->name }}
                  </span>
                </p>
              </div>

              <div class="form-group">
                <label><strong>Slug:</strong></label>
                <p><code>{{ $historicalCategory->slug }}</code></p>
              </div>

              @if ($historicalCategory->description)
                <div class="form-group">
                  <label><strong>Descripción:</strong></label>
                  <p>{{ $historicalCategory->description }}</p>
                </div>
              @endif

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Color:</strong></label>
                    <p>
                    <div class="d-flex align-items-center">
                      <div
                        style="width: 30px; height: 30px; background-color: {{ $historicalCategory->color }}; border-radius: 4px; margin-right: 10px;">
                      </div>
                      <code>{{ $historicalCategory->color }}</code>
                    </div>
                    </p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Icono:</strong></label>
                    <p>
                      @if ($historicalCategory->icon)
                        <i class="{{ $historicalCategory->icon }}" style="font-size: 20px; margin-right: 8px;"></i>
                        <code>{{ $historicalCategory->icon }}</code>
                      @else
                        <span class="text-muted">Sin icono asignado</span>
                      @endif
                    </p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Orden:</strong></label>
                    <p>{{ $historicalCategory->sort_order }}</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Estado:</strong></label>
                    <p>
                      @if ($historicalCategory->is_active)
                        <span class="badge badge-success">Activa</span>
                      @else
                        <span class="badge badge-danger">Inactiva</span>
                      @endif
                    </p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Fecha de Creación:</strong></label>
                    <p>{{ $historicalCategory->created_at->format('d/m/Y H:i') }}</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Última Actualización:</strong></label>
                    <p>{{ $historicalCategory->updated_at->format('d/m/Y H:i') }}</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label><strong>Elementos Históricos Asociados:</strong></label>
                <div class="card">
                  <div class="card-body">
                    @if ($historicalCategory->historicalItems->count() > 0)
                      <p class="mb-3">
                        <span class="badge badge-info">{{ $historicalCategory->historicalItems->count() }}
                          elementos</span>
                      </p>

                      <ul class="list-unstyled mb-0">
                        @foreach ($historicalCategory->historicalItems as $item)
                          <li class="mb-2">
                            <a href="{{ route('admin.historical-items.show', $item) }}" class="text-decoration-none">
                              <i class="fas fa-file-alt text-muted"></i>
                              {{ $item->title }}
                              @if (!$item->is_active)
                                <span class="badge badge-secondary badge-sm">Inactivo</span>
                              @endif
                            </a>
                          </li>
                        @endforeach
                      </ul>
                    @else
                      <p class="text-muted mb-0">No hay elementos históricos asociados a esta categoría.</p>
                    @endif
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label><strong>Vista Pública:</strong></label>
                <div>
                  <a href="{{ route('historical.index', ['category' => $historicalCategory->slug]) }}" target="_blank"
                    class="btn btn-info btn-block">
                    <i class="fas fa-external-link-alt"></i> Ver en sitio web
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <form action="{{ route('admin.historical-categories.destroy', $historicalCategory) }}" method="POST"
            style="display: inline;" class="delete-form float-right">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
              <i class="fas fa-trash"></i> Eliminar
            </button>
          </form>

          @if ($historicalCategory->is_active)
            <form action="{{ route('admin.historical-categories.deactivate', $historicalCategory) }}" method="POST"
              style="display: inline;" class="float-right mr-2">
              @csrf
              @method('POST')
              <button type="submit" class="btn btn-warning">
                <i class="fas fa-pause"></i> Desactivar
              </button>
            </form>
          @else
            <form action="{{ route('admin.historical-categories.activate', $historicalCategory) }}" method="POST"
              style="display: inline;" class="float-right mr-2">
              @csrf
              @method('POST')
              <button type="submit" class="btn btn-success">
                <i class="fas fa-play"></i> Activar
              </button>
            </form>
          @endif
        </div>

      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    $('.delete-form').on('submit', function(e) {
      e.preventDefault();
      if (confirm('¿Estás seguro de que deseas eliminar esta categoría? Esta acción no se puede deshacer.')) {
        this.submit();
      }
    });
  </script>
@endpush
