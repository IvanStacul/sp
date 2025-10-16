@extends('admin.layouts.app')

@section('content-title', 'Editar Elemento Histórico')

@push('styles')
  {{-- Select2 --}}
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  {{-- iCheck for checkboxes and radio inputs --}}
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <style>
    #editorjs {
      border: 1px solid #e5e5e5;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 20px;
    }

    /* Estilo para checkboxes de eliminar archivos */
    .btn-outline-danger input[type="checkbox"]:checked+i {
      color: #dc3545;
    }

    .btn-outline-danger:has(input[type="checkbox"]:checked) {
      background-color: #dc3545;
      color: white;
      border-color: #dc3545;
    }

    /* Estilos para edición de nombres */
    .edit-name-trigger {
      font-size: 0.75rem;
      color: #6c757d;
      text-decoration: none;
    }

    .edit-name-trigger:hover {
      color: #007bff;
      text-decoration: underline;
    }

    .editable-name-container .file-display-name {
      transition: all 0.2s ease;
    }

    .edit-name-form .input-group {
      margin-bottom: 0.25rem;
    }
  </style>
@endpush

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">

        <div class="card-header">
          <h3 class="card-title">Editar Elemento Histórico: {{ $historicalItem->title }}</h3>
        </div>
        <form class="form-horizontal" method="POST"
          action="{{ route('admin.historical-items.update', $historicalItem) }}" enctype="multipart/form-data"
          id="historical-item-form">

          @csrf
          @method('PUT')

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
              <div class="col-sm-12">
                <label for="title" class="col-form-label">
                  Título <span style="color:red">*</span>
                </label>

                <input id="title" class="form-control @error('title') is-invalid @enderror" name="title"
                  value="{{ old('title', $historicalItem->title) }}" required autofocus
                  placeholder="Ingrese el título del elemento histórico">

                @error('title')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 col-sm-12">
                <label for="category_id" class="col-form-label">
                  Categoría
                </label>

                <select id="category_id" class="form-control @error('category_id') is-invalid @enderror"
                  name="category_id">
                  <option value="">Seleccione una categoría (opcional)</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                      {{ old('category_id', $historicalItem->category_id) == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                    </option>
                  @endforeach
                </select>

                @error('category_id')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-6 col-sm-12">
                <label for="event_date" class="col-form-label">
                  Fecha del Evento
                </label>

                <input id="event_date" class="form-control @error('event_date') is-invalid @enderror"
                  name="event_date" type="date"
                  value="{{ old('event_date', $historicalItem->event_date ? $historicalItem->event_date->format('Y-m-d') : now()->toDateString()) }}"
                  placeholder="Seleccione la fecha del evento">

                @error('event_date')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <small class="form-text text-muted">
                  Fecha en que ocurrió el evento histórico.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-4 col-sm-12">
                <label for="sort_order" class="col-form-label">
                  Orden
                </label>

                <input id="sort_order" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order"
                  type="number" min="0" value="{{ old('sort_order', $historicalItem->sort_order) }}"
                  placeholder="Orden de visualización">

                @error('sort_order')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-4 col-sm-12">
                <label class="col-form-label">Estado y Opciones</label>
                <div class="icheck-success">
                  <input type="checkbox" name="featured" id="featured" value="1"
                    {{ old('featured', $historicalItem->featured) ? 'checked' : '' }}>
                  <label for="featured">
                    Elemento destacado
                  </label>
                </div>

                <div class="icheck-primary">
                  <input type="checkbox" name="is_active" id="is_active" value="1"
                    {{ old('is_active', $historicalItem->is_active) ? 'checked' : '' }}>
                  <label for="is_active">
                    Activo
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <label for="description" class="col-form-label"> Descripción </label>

                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                  rows="3" placeholder="Ingrese una descripción breve (opcional)">{{ old('description', $historicalItem->description) }}</textarea>

                @error('description')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 col-sm-12">
                <label for="image" class="col-form-label">
                  Imagen de Portada <span style="color:red">*</span>
                </label>

                @if ($historicalItem->image_path)
                  <div class="mb-2">
                    <img src="{{ asset($historicalItem->image_path) }}" alt="{{ $historicalItem->title }}"
                      style="width: 200px; height: 150px; object-fit: cover;" class="rounded">
                    <p class="text-muted small mt-1">Imagen actual</p>
                  </div>
                @endif

                <input id="image" class="form-control @error('image') is-invalid @enderror" name="image"
                  type="file" accept="image/*">

                @error('image')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <small class="form-text text-muted">
                  Formatos soportados: JPEG, PNG, JPG, GIF, WEBP. Máximo 5MB.
                  Dejar vacío para mantener la imagen actual.
                </small>
              </div>

              <div class="col-md-6 col-sm-12">
                <!-- Espacio para mantener el diseño -->
              </div>
            </div>

            {{-- PDFs existentes --}}
            @if ($historicalItem->pdfs->count() > 0)
              <div class="form-group row">
                <div class="col-12">
                  <label class="col-form-label">
                    <strong>PDFs Actuales</strong>
                  </label>

                  <div class="row">
                    @foreach ($historicalItem->pdfs as $pdf)
                      <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card">
                          <div class="card-body p-3">
                            <div class="text-center p-3 bg-light rounded mb-2"
                              style="height: 100px; display: flex; align-items: center; justify-content: center;">
                              <i class="fas fa-file-pdf fa-3x text-danger"></i>
                            </div>

                            {{-- Nombre editable --}}
                            <div class="mb-1">
                              <div class="editable-name-container" data-file-id="{{ $pdf->id }}">
                                <p class="mb-0 small text-truncate file-display-name" title="{{ $pdf->display_name }}">
                                  <strong>{{ $pdf->display_name }}</strong>
                                </p>
                                <div class="edit-name-form" style="display: none;">
                                  <div class="input-group input-group-sm">
                                    <input type="text" class="form-control form-control-sm edit-name-input"
                                      value="{{ $pdf->display_name }}" maxlength="255">
                                    <div class="input-group-append">
                                      <button type="button" class="btn btn-success btn-sm save-name-btn"
                                        title="Guardar">
                                        <i class="fas fa-check"></i>
                                      </button>
                                      <button type="button" class="btn btn-secondary btn-sm cancel-edit-btn"
                                        title="Cancelar">
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <button type="button" class="btn btn-link btn-sm p-0 edit-name-trigger"
                                data-file-id="{{ $pdf->id }}" title="Editar nombre">
                                <i class="fas fa-edit"></i> Editar nombre
                              </button>
                            </div>

                            <p class="mb-1 small text-muted text-truncate" title="{{ $pdf->original_name }}">
                              Archivo: {{ $pdf->original_name }}
                            </p>
                            <p class="mb-2 small text-muted">
                              {{ $pdf->formatted_size }}
                            </p>

                            <div class="btn-group btn-group-sm d-flex" role="group">
                              <a href="{{ asset($pdf->file_path) }}" target="_blank"
                                class="btn btn-outline-info flex-fill" title="Ver PDF">
                                <i class="fas fa-eye"></i>
                              </a>

                              <label class="btn btn-outline-danger flex-fill mb-0" title="Marcar para eliminar">
                                <input type="checkbox" name="delete_files[]" value="{{ $pdf->id }}"
                                  class="d-none">
                                <i class="fas fa-trash"></i>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>

                  <small class="form-text text-muted">
                    Marca los PDFs que deseas eliminar. Los archivos no marcados se mantendrán.
                  </small>
                </div>
              </div>
            @elseif($historicalItem->pdf_path)
              {{-- PDF legacy --}}
              <div class="form-group row">
                <div class="col-12">
                  <label class="col-form-label">
                    <strong>PDF Actual (Sistema Antiguo)</strong>
                  </label>
                  <div class="alert alert-info">
                    <i class="fas fa-file-pdf mr-2"></i>
                    <a href="{{ asset($historicalItem->pdf_path) }}" target="_blank" class="alert-link">
                      Ver PDF actual
                    </a>
                    <small class="d-block mt-1">Este PDF está en el sistema antiguo. Al agregar nuevos PDFs abajo, este
                      seguirá disponible.</small>
                  </div>
                </div>
              </div>
            @endif

            {{-- Agregar nuevos PDFs --}}
            {{-- Agregar nuevos PDFs --}}
            <div class="form-group row">
              <div class="col-md-12 col-sm-12">
                <label for="pdfs" class="col-form-label">
                  Agregar Nuevos PDFs
                </label>

                <input id="pdfs"
                  class="form-control @error('pdfs') @error('pdfs.*') is-invalid @enderror @enderror" name="pdfs[]"
                  type="file" accept=".pdf" multiple>

                @error('pdfs')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                @error('pdfs.*')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <small class="form-text text-muted">
                  Archivos PDF opcionales. Máximo 10MB por archivo.
                  <strong>Puedes seleccionar múltiples archivos.</strong>
                </small>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <label for="content" class="col-form-label">
                  Contenido Detallado
                </label>

                <div id="editorjs"></div>
                <input type="hidden" name="content" id="content-input">

                @error('content')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Actualizar</button>
            <a href="{{ route('admin.historical-items.index') }}" class="btn btn-danger mr-4 float-right">Cancelar</a>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  {{-- Select2 --}}
  <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
  {{-- EditorJS Core - DEBE cargarse primero --}}
  <script src="{{ asset('admin/plugins/editorjs/editorjs.js') }}"></script>
  {{-- EditorJS Plugins --}}
  <script src="{{ asset('admin/plugins/editorjs/header.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/list.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/image.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/delimiter.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/table.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/attaches.js') }}"></script>

  <script>
    // Inicializar Select2
    $(function() {
      $('#category_id').select2({
        theme: 'bootstrap4',
        placeholder: 'Seleccione una categoría (opcional)',
        allowClear: true
      });
    });

    document.addEventListener("DOMContentLoaded", () => {
      // Verifica si el contenido es una cadena JSON válida
      let editorData = {};

      const itemContent = @json($historicalItem->content ?? '{}');

      try {
        if (typeof itemContent === 'object') {
          editorData = itemContent;
        } else {
          editorData = JSON.parse(itemContent);
        }
      } catch (e) {
        console.error("Error parsing editor data: ", e);
      }

      const editor = new EditorJS({
        holder: 'editorjs',
        tools: {
          header: {
            class: Header,
            inlineToolbar: ['link'],
            config: {
              placeholder: 'Ingrese un título',
              levels: [2, 3, 4],
              defaultLevel: 3
            },
          },
          list: {
            class: NestedList,
            inlineToolbar: true,
          },
          image: {
            class: ImageTool,
            config: {
              endpoints: {
                byFile: "{{ route('admin.editor.uploadImage') . '?_token=' . csrf_token() }}",
                byUrl: "{{ route('admin.editor.fetchImage') . '?_token=' . csrf_token() }}",
              },
              field: 'upload',
              placeholder: 'Arrastra una imagen o haz clic para seleccionarla',
            }
          },
          delimiter: Delimiter,
          table: {
            class: Table,
            inlineToolbar: true,
            config: {
              rows: 2,
              cols: 2,
              withHeadings: true,
            },
          },
          attaches: {
            class: AttachesTool,
            config: {
              endpoint: "{{ route('admin.editor.uploadAttachment') . '?_token=' . csrf_token() }}",
              types: 'video/*',
              buttonText: 'Seleccionar video',
              errorMessage: 'No se pudo cargar el video',
            },
          },
        },
        i18n: {
          messages: {
            ui: {
              "blockTunes": {
                "toggler": {
                  "Click to tune": "Haga clic para afinar",
                  "or drag to move": "o arrastre para mover"
                },
              },
              "inlineToolbar": {
                "converter": {
                  "Convert to": "Convertir a"
                }
              },
              "toolbar": {
                "toolbox": {
                  "Add": "Añadir",
                }
              },
              "popover": {
                "Filter": "Filtrar",
                "Nothing found": "No se encontró nada",
              },
            },
            toolNames: {
              "Bold": "Negrita",
              "Italic": "Cursiva",
              "Text": 'Texto',
              "Heading": 'Título',
              "Image": "Imagen",
              "List": "Lista",
              "Delimiter": "Separador",
              "Table": "Tabla",
              "Attachment": "Videos",
            },
            blockTunes: {
              "delete": {
                "Delete": "Eliminar"
              },
              "moveUp": {
                "Move up": "Mover hacia arriba"
              },
              "moveDown": {
                "Move down": "Mover hacia abajo"
              },
              "withBackground": {
                "With background": "Con fondo"
              },
            },
            tools: {
              "paragraph": {
                "Paragraph": "Párrafo"
              },
              "bold": {
                "Bold": "Negrita"
              },
              "italic": {
                "Italic": "Cursiva"
              },
              "header": {
                "Heading 1": "Título 1",
                "Heading 2": "Título 2",
                "Heading 3": "Título 3",
                "Heading 4": "Título 4",
                "Heading 5": "Título 5",
                "Heading 6": "Título 6"
              },
              "image": {
                "Select an Image": "Seleccionar una imagen",
                "Caption": "Pie de foto",
                "With border": "Con borde",
                "Stretch image": "Estirar imagen",
                "With background": "Con fondo",
                "Couldn't upload image. Please try another.": "No se pudo subir la imagen. Por favor, intente con otra.",
              },
              "list": {
                "Unordered": "Lista desordenada",
                "Ordered": "Lista ordenada"
              },
              "table": {
                "With headings": "Con encabezados",
                "Without headings": "Sin encabezados",
                "Add row above": "Añadir fila arriba",
                "Add row below": "Añadir fila abajo",
                "Add column left": "Añadir columna a la izquierda",
                "Add column right": "Añadir columna a la derecha",
                "Delete row": "Eliminar fila",
                "Delete column": "Eliminar columna",
              }
            }
          }
        },
        data: editorData,
      });

      document.getElementById('historical-item-form').addEventListener('submit', async (e) => {
        e.preventDefault();

        const outputData = await editor.save();

        document.getElementById('content-input').value = JSON.stringify(outputData);

        e.target.submit();
      });
    });

    // ===== Funcionalidad para editar nombres de archivos =====
    $(document).ready(function() {
      // Mostrar formulario de edición
      $('.edit-name-trigger').on('click', function() {
        const fileId = $(this).data('file-id');
        const container = $(`.editable-name-container[data-file-id="${fileId}"]`);

        container.find('.file-display-name').hide();
        container.find('.edit-name-form').show();
        $(this).hide();

        // Enfocar el input
        container.find('.edit-name-input').focus().select();
      });

      // Cancelar edición
      $('.cancel-edit-btn').on('click', function() {
        const container = $(this).closest('.editable-name-container');
        const fileId = container.data('file-id');

        container.find('.file-display-name').show();
        container.find('.edit-name-form').hide();
        $(`.edit-name-trigger[data-file-id="${fileId}"]`).show();

        // Restaurar valor original
        const originalName = container.find('.file-display-name strong').text().trim();
        container.find('.edit-name-input').val(originalName);
      });

      // Guardar cambios
      $('.save-name-btn').on('click', function() {
        const btn = $(this);
        const container = btn.closest('.editable-name-container');
        const fileId = container.data('file-id');
        const newName = container.find('.edit-name-input').val().trim();

        if (!newName) {
          Swal.fire({
            icon: 'warning',
            title: 'Campo vacío',
            text: 'El nombre no puede estar vacío'
          });
          return;
        }

        // Deshabilitar botón mientras se guarda
        btn.prop('disabled', true);
        const originalIcon = btn.html();
        btn.html('<i class="fas fa-spinner fa-spin"></i>');

        // Hacer petición AJAX
        $.ajax({
          url: `/admin/historical-items/files/${fileId}/update-name`,
          method: 'PATCH',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
            display_name: newName
          },
          success: function(response) {
            // Actualizar el nombre en la vista
            container.find('.file-display-name strong').text(newName);
            container.find('.file-display-name').attr('title', newName);

            // Ocultar formulario y mostrar nombre
            container.find('.file-display-name').show();
            container.find('.edit-name-form').hide();
            $(`.edit-name-trigger[data-file-id="${fileId}"]`).show();

            // Mostrar mensaje de éxito
            Swal.fire({
              icon: 'success',
              title: 'Éxito',
              text: 'Nombre actualizado exitosamente',
              timer: 2000,
              showConfirmButton: false
            });
          },
          error: function(xhr) {
            let errorMsg = 'Error al actualizar el nombre';
            if (xhr.responseJSON && xhr.responseJSON.message) {
              errorMsg = xhr.responseJSON.message;
            }
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: errorMsg
            });
          },
          complete: function() {
            btn.prop('disabled', false);
            btn.html(originalIcon);
          }
        });
      });

      // Permitir guardar con Enter
      $('.edit-name-input').on('keypress', function(e) {
        if (e.which === 13) { // Enter
          e.preventDefault();
          $(this).closest('.editable-name-container').find('.save-name-btn').click();
        }
      });

      // Permitir cancelar con Escape
      $('.edit-name-input').on('keydown', function(e) {
        if (e.which === 27) { // Escape
          e.preventDefault();
          $(this).closest('.editable-name-container').find('.cancel-edit-btn').click();
        }
      });
    });
  </script>
@endpush
