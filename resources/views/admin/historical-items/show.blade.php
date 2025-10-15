@extends('admin.layouts.app')

@section('content-title', 'Ver Elemento Histórico')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">{{ $historicalItem->title }}</h3>
          <div class="card-tools">
            <a href="{{ route('admin.historical-items.edit', $historicalItem) }}" class="btn btn-warning btn-sm">
              <i class="fas fa-edit"></i> Editar
            </a>
            <a href="{{ route('admin.historical-items.index') }}" class="btn btn-secondary btn-sm">
              <i class="fas fa-arrow-left"></i> Volver
            </a>
          </div>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label><strong>Categoría:</strong></label>
                <p>
                  @if($historicalItem->category)
                    <span class="badge" style="background-color: {{ $historicalItem->category->color }}; color: white;">
                      @if($historicalItem->category->icon)
                        <i class="{{ $historicalItem->category->icon }}"></i>
                      @endif
                      {{ $historicalItem->category->name }}
                    </span>
                  @else
                    <span class="text-muted">Sin categoría asignada</span>
                  @endif
                </p>
              </div>

              <div class="form-group">
                <label><strong>Título:</strong></label>
                <p>{{ $historicalItem->title }}</p>
              </div>

              <div class="form-group">
                <label><strong>Slug:</strong></label>
                <p><code>{{ $historicalItem->slug }}</code></p>
              </div>

              <div class="form-group">
                <label><strong>Descripción:</strong></label>
                <p>{{ $historicalItem->description }}</p>
              </div>

              @if($historicalItem->content)
                <div class="form-group">
                  <label><strong>Contenido:</strong></label>
                  <div class="border p-3 rounded bg-light">
                    @php
                      $content = json_decode($historicalItem->content, true);
                    @endphp

                    @if(is_array($content) && isset($content['blocks']))
                      <div class="prose prose-lg max-w-none">
                        @foreach ($content['blocks'] as $block)
                          {{ \App\View\Components\Editorjs\Factory::make($block)->render() }}
                        @endforeach
                      </div>
                    @else
                      {!! nl2br(e($historicalItem->content)) !!}
                    @endif
                  </div>
                </div>
              @endif

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Orden:</strong></label>
                    <p>{{ $historicalItem->sort_order }}</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Estado:</strong></label>
                    <p>
                      @if($historicalItem->is_active)
                        <span class="badge badge-success">Activo</span>
                      @else
                        <span class="badge badge-danger">Inactivo</span>
                      @endif

                      @if($historicalItem->featured)
                        <span class="badge badge-warning ml-2">Destacado</span>
                      @endif
                    </p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Fecha de Creación:</strong></label>
                    <p>{{ $historicalItem->created_at->format('d/m/Y H:i') }}</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Última Actualización:</strong></label>
                    <p>{{ $historicalItem->updated_at->format('d/m/Y H:i') }}</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              @if($historicalItem->image_path)
                <div class="form-group">
                  <label><strong>Imagen:</strong></label>
                  <div>
                    <img src="{{ asset($historicalItem->image_path) }}" alt="{{ $historicalItem->title }}"
                         class="img-fluid rounded shadow">
                  </div>
                </div>
              @endif

              @if($historicalItem->pdf_path)
                <div class="form-group">
                  <label><strong>Documento PDF:</strong></label>
                  <div>
                    <a href="{{ asset($historicalItem->pdf_path) }}" target="_blank" class="btn btn-primary btn-block">
                      <i class="fas fa-file-pdf"></i> Ver PDF
                    </a>
                  </div>
                </div>
              @endif

              <div class="form-group">
                <label><strong>Vista Pública:</strong></label>
                <div>
                  <a href="{{ route('historical.show', $historicalItem->slug) }}" target="_blank" class="btn btn-info btn-block">
                    <i class="fas fa-external-link-alt"></i> Ver en sitio web
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <form action="{{ route('admin.historical-items.destroy', $historicalItem) }}" method="POST"
                style="display: inline;" class="delete-form float-right">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
              <i class="fas fa-trash"></i> Eliminar
            </button>
          </form>

          @if($historicalItem->is_active)
            <form action="{{ route('admin.historical-items.deactivate', $historicalItem) }}" method="POST" style="display: inline;" class="float-right mr-2">
              @csrf
              @method('POST')
              <button type="submit" class="btn btn-warning">
                <i class="fas fa-pause"></i> Desactivar
              </button>
            </form>
          @else
            <form action="{{ route('admin.historical-items.activate', $historicalItem) }}" method="POST" style="display: inline;" class="float-right mr-2">
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
      if (confirm('¿Estás seguro de que deseas eliminar este elemento histórico? Esta acción no se puede deshacer.')) {
        this.submit();
      }
    });
  </script>
@endpush
