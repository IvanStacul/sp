@extends('admin.layouts.app')

@section('content-title', __('guides.titles.create'))

@push('styles')
  {{-- Select2 --}}
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

  {{-- iCheck --}}
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <style>
    #editorjs {
      border: 1px solid #e5e5e5;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 20px;
    }
  </style>
@endpush

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">

        <div class="card-header">
          <h3 class="card-title"> {{ __('guides.titles.edit') }} </h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('admin.guides.update', $guide) }}"
          enctype="multipart/form-data" id="news-form">

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

            <p class="text-bold"><span style="color:red">*</span> {{ __('guides.forms.required-fields') }}</p>
            <hr>

            <div class="form-group row">
              <div class="col-md-5">
                <label for="title" class="col-form-label">
                  {{ __('guides.forms.labels.title') }} <span style="color:red">*</span>
                </label>

                <input id="title" class="form-control @error('title') is-invalid @enderror" name="title"
                  value="{{ old('title', $guide->title) }}" required autofocus
                  placeholder="{{ __('guides.forms.placeholders.title') }}">

                @error('title')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-5 col-sm-12">
                <label for="guide_category_id" class="col-form-label">
                  {{ __('guides.forms.labels.guide_category_id') }} <span style="color:red">*</span>
                </label>

                <select name="guide_category_id" id="guide_category_id"
                  class="form-control select2 @error('guide_category_id') is-invalid @enderror" required>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                      {{ old('guide_category_id', $guide->guide_category_id) == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                    </option>
                  @endforeach
                </select>

                @error('guide_category_id')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-2 col-sm-12 d-flex justify-content-center align-items-end">
                <div class="icheck-primary">
                  <input type="checkbox" id="is_active" checked="" name="is_active">
                  <label for="is_active">
                    {{ __('guides.forms.labels.is_active') }} <span style="color:red">*</span>
                  </label>
                </div>

                @error('is_active')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <input type="hidden" name="content" id="editorjs_content">

                <label for="editorjs" class="col-form-label">
                  {{ __('guides.forms.labels.content') }} <span style="color:red">*</span>
                </label>

                <div id="editorjs"></div>

                {{-- <textarea id="editorjs" class="form-control @error('content') is-invalid @enderror" name="content" required
                  cols="30" rows="10">{{ old('content', $guide->content) }}</textarea> --}}

                @error('content')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right"> {{ __('guides.buttons.save') }} </button>
            <a href="{{ route('admin.guides.index') }}" class="btn btn-danger mr-4 float-right">
              {{ __('guides.buttons.back') }}
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  {{-- Select2 --}}
  <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>

  <script src="{{ asset('admin/plugins/editorjs/header.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/image.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/list.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/delimiter.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/table.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/editorjs.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/attaches.js') }}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      $('.select2').select2({ theme: 'bootstrap4' });

      // Verifica si el contenido antiguo o el contenido de las noticias es una cadena JSON válida
      // y utiliza un objeto JavaScript vacío como valor predeterminado si no lo es.
      let editorData = {};

      // Utiliza la directiva  para manejar correctamente la conversión a JSON
      const oldContent = @json(old('content', $guide->content ?? '{}'));

      try {
        // verifica si el contenido antiguo es un objeto JSON válido
        if (typeof oldContent === 'object') {
          editorData = oldContent;
        } else {
          editorData = JSON.parse(oldContent);
        }
      } catch (e) {
        console.error("Error parsing editor data: ", e);
        // Maneja el error como prefieras, posiblemente dejando editorData como un objeto vacío.
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

      document.getElementById('news-form').addEventListener('submit', async (e) => {
        e.preventDefault();

        const outputData = await editor.save();

        document.getElementById('editorjs_content').value = JSON.stringify(outputData);
        // document.getElementById('editorjs_content').value = outputData;

        e.target.submit();
      });
    });
  </script>
@endpush
