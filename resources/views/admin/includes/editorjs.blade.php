{{-- EditorJS Include --}}
<script src="{{ asset('admin/plugins/editorjs/header.js') }}"></script>
<script src="{{ asset('admin/plugins/editorjs/image.js') }}"></script>
<script src="{{ asset('admin/plugins/editorjs/list.js') }}"></script>
<script src="{{ asset('admin/plugins/editorjs/delimiter.js') }}"></script>
<script src="{{ asset('admin/plugins/editorjs/table.js') }}"></script>
<script src="{{ asset('admin/plugins/editorjs/editorjs.js') }}"></script>
<script src="{{ asset('admin/plugins/editorjs/attaches.js') }}"></script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Configuración del editor
    let editorData = {};
    const editorElement = document.querySelector('{{ $editorId }}');
    const inputElement = document.querySelector('{{ $inputId }}');

    if (!editorElement || !inputElement) {
      console.error('EditorJS: elementos no encontrados');
      return;
    }

    // Intentar parsear el contenido existente
    const existingContent = inputElement.value;

    try {
      if (existingContent && existingContent !== '{}') {
        editorData = JSON.parse(existingContent);
      }
    } catch (e) {
      console.error("Error parsing editor data: ", e);
      editorData = {};
    }

    // Configurar el endpoint para attachments
    const attachmentEndpoint = '{{ $uploadAttachmentEndpoint ?? route("admin.editor.uploadAttachment") }}';
    const attachmentEndpointWithToken = attachmentEndpoint + '?_token={{ csrf_token() }}&context=edicts';

    const editor = new EditorJS({
      holder: editorElement,
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
            endpoint: attachmentEndpointWithToken,
            types: 'application/pdf,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,video/*',
            buttonText: 'Seleccionar archivo',
            errorMessage: 'No se pudo cargar el archivo',
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
            "Attachment": "Archivos",
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
            "attaches": {
              "Select file to upload": "Seleccionar archivo para subir",
              "File size": "Tamaño del archivo",
              "File uploaded": "Archivo subido",
            }
          }
        }
      },
      data: editorData,
    });

    // Manejar el envío del formulario
    const form = document.querySelector('form');
    if (form) {
      form.addEventListener('submit', async (e) => {
        e.preventDefault();

        try {
          const outputData = await editor.save();
          inputElement.value = JSON.stringify(outputData);

          // Permitir que el formulario se envíe normalmente
          e.target.submit();
        } catch (error) {
          console.error('Error saving editor data:', error);
          alert('Error al guardar el contenido. Por favor, intente nuevamente.');
        }
      });
    }
  });
</script>
