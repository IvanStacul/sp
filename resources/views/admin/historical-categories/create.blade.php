@extends('admin.layouts.app')

@section('content-title', 'Crear Categoría Histórica')

@push('styles')
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

  <style>
    .icon-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
      gap: 10px;
      max-height: 300px;
      overflow-y: auto;
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 4px;
      background-color: #f9f9f9;
    }

    .icon-option {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 10px;
      border: 2px solid #ddd;
      border-radius: 4px;
      cursor: pointer;
      transition: all 0.2s;
      background-color: white;
      min-height: 60px;
    }

    .icon-option:hover {
      border-color: #16a34a;
      background-color: #f0fdf4;
    }

    .icon-option.selected {
      border-color: #16a34a;
      background-color: #dcfce7;
      box-shadow: 0 0 0 2px rgba(22, 163, 74, 0.2);
    }

    .icon-option i {
      font-size: 24px;
      color: #333;
      margin-bottom: 5px;
    }

    .icon-option.selected i {
      color: #16a34a;
    }

    .category-preview {
      display: inline-block;
      padding: 8px 16px;
      background-color: #16a34a;
      color: white;
      border-radius: 6px;
      font-size: 16px;
      font-weight: 500;
    }

    .category-preview i {
      margin-right: 8px;
    }
  </style>
@endpush

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">

        <div class="card-header">
          <h3 class="card-title">Crear Categoría Histórica</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('admin.historical-categories.store') }}"
          id="category-form" enctype="multipart/form-data">

          @csrf

          <div class="card-body">

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <p class="text-bold"><span style="color:red">*</span> Campos requeridos</p>
            <hr>

            <div class="form-group row">
              <div class="col-md-6 col-sm-12">
                <label for="name" class="col-form-label">
                  Nombre <span style="color:red">*</span>
                </label>

                <input id="name" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name') }}" required autofocus placeholder="Ingrese el nombre de la categoría">

                @error('name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-3 col-sm-12">
                <label for="sort_order" class="col-form-label">
                  Orden
                </label>

                <input id="sort_order" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order"
                  type="number" min="0" value="{{ old('sort_order', 0) }}" placeholder="Orden de visualización">

                @error('sort_order')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-3 col-sm-12">
                <label class="col-form-label">Estado</label>
                <div class="icheck-success">
                  <input type="checkbox" name="is_active" id="is_active" value="1"
                    {{ old('is_active', true) ? 'checked' : '' }}>
                  <label for="is_active">
                    Categoría activa
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <label for="description" class="col-form-label">
                  Descripción
                </label>

                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                  rows="3" placeholder="Descripción opcional de la categoría">{{ old('description') }}</textarea>

                @error('description')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <label class="col-form-label">
                  Vista Previa
                </label>
                <div>
                  <span class="category-preview" id="category-preview">
                    <i class="fas fa-folder" id="preview-icon"></i>
                    <span id="preview-name">Nueva Categoría</span>
                  </span>
                </div>
                <small class="form-text text-muted">Así se verá la categoría en el sitio web.</small>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <label for="background_image" class="col-form-label">
                  Imagen de Fondo
                </label>

                <input type="file" id="background_image" class="form-control @error('background_image') is-invalid @enderror" name="background_image"
                  accept="image/*" onchange="previewImage(event, 'background')">

                @if (old('background_image'))
                  <div class="mt-2">
                    <small class="text-muted">Archivo seleccionado: {{ old('background_image') }}</small>
                  </div>
                @endif

                <div id="background-image-preview" class="mt-2" style="display: none;">
                  <img id="background-preview-img" src="#" alt="Vista previa" class="img-thumbnail" style="max-width: 200px; max-height: 150px; object-fit: cover;">
                </div>

                @error('background_image')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <small class="form-text text-muted">Seleccione una imagen de fondo que se mostrará en la página principal cuando se seleccione esta categoría. Formatos recomendados: JPG, PNG, WebP. Tamaño máximo: 2MB.</small>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <label for="mobile_image" class="col-form-label">
                  Imagen para Móvil (Opcional)
                </label>

                <input type="file" id="mobile_image" class="form-control @error('mobile_image') is-invalid @enderror" name="mobile_image"
                  accept="image/*" onchange="previewImage(event, 'mobile')">

                @if (old('mobile_image'))
                  <div class="mt-2">
                    <small class="text-muted">Archivo seleccionado: {{ old('mobile_image') }}</small>
                  </div>
                @endif

                <div id="mobile-image-preview" class="mt-2" style="display: none;">
                  <img id="mobile-preview-img" src="#" alt="Vista previa móvil" class="img-thumbnail" style="max-width: 200px; max-height: 150px; object-fit: cover;">
                </div>

                @error('mobile_image')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <small class="form-text text-muted">Seleccione una imagen optimizada para dispositivos móviles. Si no se proporciona, se usará la imagen de fondo principal. Formatos recomendados: JPG, PNG, WebP. Tamaño máximo: 2MB.</small>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <label for="icon" class="col-form-label">
                  Seleccionar Icono
                </label>

                <input type="hidden" id="icon" name="icon" value="{{ old('icon', 'fas fa-folder') }}">

                <div class="icon-grid" id="icon-grid">
                  @php
                    $icons = [
                        'fas fa-folder' => 'Carpeta',
                        'fas fa-theater-masks' => 'Teatro',
                        'fas fa-landmark' => 'Edificio Histórico',
                        'fas fa-book' => 'Libro',
                        'fas fa-scroll' => 'Pergamino',
                        'fas fa-university' => 'Universidad',
                        'fas fa-monument' => 'Monumento',
                        'fas fa-building' => 'Edificio',
                        'fas fa-church' => 'Iglesia',
                        'fas fa-camera' => 'Fotografía',
                        'fas fa-images' => 'Galería',
                        'fas fa-file-alt' => 'Documento',
                        'fas fa-newspaper' => 'Periódico',
                        'fas fa-flag' => 'Bandera',
                        'fas fa-map-marked-alt' => 'Mapa',
                        'fas fa-archive' => 'Archivo',
                        'fas fa-medal' => 'Medalla',
                        'fas fa-award' => 'Premio',
                        'fas fa-certificate' => 'Certificado',
                        'fas fa-crown' => 'Corona',
                        'fas fa-balance-scale' => 'Justicia',
                        'fas fa-gavel' => 'Martillo',
                        'fas fa-pen-fancy' => 'Pluma',
                        'fas fa-feather-alt' => 'Pluma Antigua',
                    ];
                  @endphp

                  @foreach ($icons as $iconClass => $iconLabel)
                    <div class="icon-option {{ old('icon', 'fas fa-folder') == $iconClass ? 'selected' : '' }}"
                      data-icon="{{ $iconClass }}" title="{{ $iconLabel }}">
                      <i class="{{ $iconClass }}"></i>
                    </div>
                  @endforeach
                </div>

                @error('icon')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <small class="form-text text-muted">Seleccione un icono que represente esta categoría.</small>
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Guardar</button>
            <a href="{{ route('admin.historical-categories.index') }}" class="btn btn-danger mr-4 float-right">Cancelar</a>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    $(document).ready(function() {
      // Manejo de selección de iconos
      $('.icon-option').on('click', function() {
        // Remover selección previa
        $('.icon-option').removeClass('selected');

        // Agregar selección al icono clickeado
        $(this).addClass('selected');

        // Actualizar el campo oculto
        const iconClass = $(this).data('icon');
        $('#icon').val(iconClass);

        // Actualizar el preview
        updatePreview();
      });

      // Actualizar preview cuando cambia el nombre
      $('#name').on('input', function() {
        updatePreview();
      });

      function updatePreview() {
        const name = $('#name').val() || 'Nueva Categoría';
        const iconClass = $('#icon').val() || 'fas fa-folder';

        $('#preview-name').text(name);
        $('#preview-icon').attr('class', iconClass);
      }

      function previewImage(event, type) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            if (type === 'background') {
              $('#background-preview-img').attr('src', e.target.result);
              $('#background-image-preview').show();
            } else if (type === 'mobile') {
              $('#mobile-preview-img').attr('src', e.target.result);
              $('#mobile-image-preview').show();
            }
          }
          reader.readAsDataURL(file);
        } else {
          if (type === 'background') {
            $('#background-image-preview').hide();
          } else if (type === 'mobile') {
            $('#mobile-image-preview').hide();
          }
        }
      }

      // Inicializar preview
      updatePreview();
    });
  </script>
@endpush
