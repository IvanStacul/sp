@extends('admin.layouts.app')

@push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content-title', __('news.titles.index'))

@section('main-content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> {{ __('news.titles.index') }} </h3>
      <div class="card-tools">
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> {{ __('news.actions.create') }}
        </a>
      </div>
    </div>

    <div class="card-body">
      <table id="news-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th> {{ __('news.table.headers.id') }} </th>
            <th> {{ __('news.table.headers.title') }} </th>
            <th> {{ __('news.table.headers.publish_date') }} </th>
            <th> {{ __('news.table.headers.is_active') }} </th>
            <th class="text-center"> {{ __('news.table.headers.actions') }} </th>
          </tr>
        </thead>

        <tbody>
          @foreach ($news as $n)
            <tr>
              <td> {{ $n->id }} </td>
              <td> {{ $n->title }} </td>
              <td> {{ $n->publish_date->format('d-m-Y') }} </td>
              <td>
                @if ($n->is_active)
                  <span class="badge badge-success"> {{ __('news.table.values.active') }} </span>
                @else
                  <span class="badge badge-danger"> {{ __('news.table.values.inactive') }} </span>
                @endif
              </td>
              <td>
                <div class="d-flex justify-content-around">
                  <a href="{{ route('admin.news.show', $n) }}" class="btn btn-primary" data-toggle="tooltip"
                    data-placement="top" title="{{ __('news.tooltips.show') }}">
                    <i class="fas fa-eye"></i>
                  </a>

                  <a href="{{ route('admin.news.edit', $n) }}" class="btn btn-info" data-toggle="tooltip"
                    data-placement="top" title="{{ __('news.tooltips.edit') }}">
                    <i class="fas fa-pen"></i>
                  </a>

                  <form action="{{ route('admin.news.destroy', $n) }}" method="POST"
                    id="delete-form-{{ $n->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger"
                      onclick="confirmDelete('delete-form-{{ $n->id }}')" data-toggle="tooltip"
                      data-placement="top" title="{{ __('news.tooltips.delete') }}">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>

                  @if ($n->is_active)
                    <button type="button" class="btn bg-maroon" data-toggle="tooltip" data-placement="top"
                      title="{{ __('news.tooltips.deactivate') }}" onclick="deactivateNews(event, '{{ $n->slug }}')">
                      <i class="fas fa-toggle-on"></i>
                    </button>
                  @else
                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                      title="{{ __('news.tooltips.activate') }}" onclick="activateNews(event, '{{ $n->slug }}')">
                      <i class="fas fa-toggle-off"></i>
                    </button>
                  @endif
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>

        <tfoot>
          <tr>
            <th> {{ __('news.table.headers.id') }} </th>
            <th> {{ __('news.table.headers.title') }} </th>
            <th> {{ __('news.table.headers.publish_date') }} </th>
            <th> {{ __('news.table.headers.is_active') }} </th>
            <th class="text-center"> {{ __('news.table.headers.actions') }} </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  {{-- loading modal --}}
  <div class="modal" tabindex="-1" role="dialog" id="loading-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status">
              <span class="sr-only">Cargando...</span>
            </div>
          </div>
        </div>
      </div>
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
    $(document).ready(function() {
      $('#news-table').DataTable({
        columns: [{
            data: 'id',
            name: 'id',
          },
          {
            data: 'title',
            name: 'title'
          },
          {
            data: 'publish_date',
            name: 'publish_date'
          },
          {
            data: 'is_active',
            name: 'is_active'
          },
          {
            data: 'actions',
            name: 'actions',
            orderable: false,
            searchable: false
          },
        ],
        language: {
          url: "{{ asset('admin/plugins/datatables/lang/es-ES.json') }}"
        },
        order: [
          [0, 'desc']
        ]
      });

      $('[data-toggle="tooltip"]').tooltip();

      @if (session()->has('message'))
        Swal.fire({
          title: '{{ __('news.alerts.success.title') }}',
          text: '{{ session('message') }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      @endif
    });

    function confirmDelete(formId) {
      let form = document.getElementById(formId);

      Swal.fire({
        title: "{{ __('news.alerts.delete.title') }}",
        text: "{{ __('news.alerts.delete.text') }}",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "{{ __('news.alerts.delete.confirm') }}",
        cancelButtonText: "{{ __('news.alerts.delete.cancel') }}",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    }

    function activateNews(event, id) {
      this.disabled = true;
      event.preventDefault();
      const activateUrl = "{{ route('admin.news.activate', ':news') }}";

      // mostrar modal de carga
      $('#loading-modal').modal('show');

      // hacer la petición ajax
      const axiosInstance = axios.create();
      axiosInstance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
      axiosInstance.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]')
        .getAttribute('content');

      axiosInstance.post(activateUrl.replace(':news', id))
        .then(response => {
          console.log(response);
          // ocultar modal de carga
          $('#loading-modal').modal('hide');

          // mostrar mensaje de éxito
          Swal.fire({
            title: '¡Éxito!',
            text: response.data.message,
            icon: 'success',
            confirmButtonText: 'OK'
          });

          // recargar la página
          location.reload();
        })
        .catch(error => {
          console.error(error);
          // ocultar modal de carga
          $('#loading-modal').modal('hide');

          // mostrar mensaje de error
          Swal.fire({
            title: '¡Error!',
            text: 'Ocurrió un error al intentar activar el comercio',
            icon: 'error',
            confirmButtonText: 'OK'
          });
        });
    }

    function deactivateNews(event, id) {
      // impedir que se vuelva a enviar el formulario
      this.disabled = true;

      // quizás no sea necesario
      // event.preventDefault();

      const deactivateUrl = '{{ route('admin.news.deactivate', ':news') }}';

      // mostrar modal de carga
      $('#loading-modal').modal('show');

      // hacer la petición ajax
      const axiosInstance = axios.create();
      axiosInstance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
      axiosInstance.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]')
        .getAttribute('content');

      axiosInstance.post(deactivateUrl.replace(':news', id))
        .then(response => {
          console.log(response);
          // ocultar modal de carga
          $('#loading-modal').modal('hide');

          // mostrar mensaje de éxito
          Swal.fire({
            title: '¡Éxito!',
            text: response.data.message,
            icon: 'success',
            confirmButtonText: 'OK'
          });

          // recargar la página
          location.reload();
        })
        .catch(error => {
          console.error(error);
          // ocultar modal de carga
          $('#loading-modal').modal('hide');

          // mostrar mensaje de error
          Swal.fire({
            title: '¡Error!',
            text: 'Ocurrió un error al intentar desactivar el comercio',
            icon: 'error',
            confirmButtonText: 'OK'
          });
        });
    }
  </script>
@endpush
