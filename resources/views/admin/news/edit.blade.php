@extends('admin.layouts.app')

@section('content-title', __('news.titles.create'))

@push('styles')
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
          <h3 class="card-title"> {{ __('news.titles.edit') }} </h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('admin.news.update', $news) }}"
          enctype="multipart/form-data" id="news-form">

          @csrf
          @method('PUT')

          <div class="card-body">
            <p class="text-bold"><span style="color:red">*</span> {{ __('news.forms.required-fields') }}</p>
            <hr>

            <div class="form-group row">
              <div class="col-sm-12">
                <label for="title" class="col-form-label">
                  {{ __('news.forms.labels.title') }} <span style="color:red">*</span>
                </label>

                <input id="title" class="form-control @error('title') is-invalid @enderror" name="title"
                  value="{{ old('title', $news->title) }}" required autofocus
                  placeholder="{{ __('news.forms.placeholders.title') }}">

                @error('title')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <label for="title" class="col-form-label">
                  {{ __('news.forms.labels.summary') }} <span style="color:red">*</span>
                </label>

                <input id="summary" class="form-control @error('summary') is-invalid @enderror" name="summary"
                  value="{{ old('summary', $news->summary) }}" required
                  placeholder="{{ __('news.forms.placeholders.summary') }}">

                @error('summary')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-5 col-sm-12">
                <label for="publish_date" class="col-form-label">
                  {{ __('news.forms.labels.publish_date') }} <span style="color:red">*</span>
                </label>

                <input id="publish_date" class="form-control @error('publish_date') is-invalid @enderror"
                  name="publish_date" value="{{ old('publish_date', now()->format('Y-m-d')) }}" required
                  placeholder="{{ __('news.forms.placeholders.publish_date') }}" type="date">

                @error('publish_date')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-5 col-sm-12">
                <label for="cover_image" class="col-form-label">
                  {{ __('news.forms.labels.cover_image') }}
                </label>

                <input id="cover_image" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image"
                  type="file" value="{{ old('cover_image', $news->cover_image) }}" accept="image/*"
                  placeholder="{{ __('news.forms.placeholders.cover_image') }}">

                <span class="text-muted"> Si no selecciona una imagen, se mantendrá la imagen actual. </span>

                @error('cover_image')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-2 col-sm-12 d-flex justify-content-center align-items-center">

                <div class="icheck-primary">
                  <input type="checkbox" id="is_active" name="is_active" @if ($news->is_active) checked @endif>
                  <label for="is_active">
                    {{ __('news.forms.labels.is_active') }} <span style="color:red">*</span>
                  </label>
                </div>

                @error('is_active')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <input type="hidden" name="content" id="editorjs_content">

                <label for="editorjs" class="col-form-label">
                  {{ __('news.forms.labels.content') }} <span style="color:red">*</span>
                </label>

                <div id="editorjs"></div>

                {{-- <textarea id="editorjs" class="form-control @error('content') is-invalid @enderror" name="content" required
                  cols="30" rows="10">{{ old('content', $news->content) }}</textarea> --}}

                @error('content')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right"> {{ __('news.buttons.save') }} </button>
            <a href="{{ route('admin.news.index') }}" class="btn btn-danger mr-4 float-right">
              {{ __('news.buttons.back') }}
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('admin/plugins/editorjs/header.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/image.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/list.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/delimiter.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/table.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/editorjs.js') }}"></script>
  <script src="{{ asset('admin/plugins/editorjs/attaches.js') }}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Verifica si el contenido antiguo o el contenido de las noticias es una cadena JSON válida
      // y utiliza un objeto JavaScript vacío como valor predeterminado si no lo es.
      let editorData = {};

      // Utiliza la directiva  para manejar correctamente la conversión a JSON
      const oldContent = @json(old('content', $news->content ?? '{}'));

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
              },
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
