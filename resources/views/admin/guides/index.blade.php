@extends('admin.layouts.app')

@push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content-title', __('guides.titles.index'))

@section('main-content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> {{ __('guides.titles.index') }} </h3>
      <div class="card-tools">
        <a href="{{ route('admin.guides.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> {{ __('guides.actions.create') }}
        </a>
      </div>
    </div>

    <div class="card-body">
      <table id="news-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th> {{ __('guides.table.headers.id') }} </th>
            <th> {{ __('guides.table.headers.title') }} </th>
            <th> {{ __('guides.table.headers.guide_category') }} </th>
            <th> {{ __('guides.table.headers.is_active') }} </th>
            <th class="text-center"> {{ __('guides.table.headers.actions') }} </th>
          </tr>
        </thead>

        <tbody>
          @foreach ($guides as $guide)
            <tr>
              <td> {{ $guide->id }} </td>
              <td> {{ $guide->title }} </td>
              <td> {{ $guide->category->name }} </td>
              <td>
                @if ($guide->is_active)
                  <span class="badge badge-success"> {{ __('guides.table.values.active') }} </span>
                @else
                  <span class="badge badge-danger"> {{ __('guides.table.values.inactive') }} </span>
                @endif
              </td>
              <td>
                <div class="d-flex justify-content-around">
                  {{-- <a href="{{ route('admin.guides.show', $guide) }}" class="btn btn-primary" data-toggle="tooltip"
                    data-placement="top" title="{{ __('guides.tooltips.show') }}">
                    <i class="fas fa-eye"></i>
                  </a> --}}

                  <a href="{{ route('admin.guides.edit', $guide) }}" class="btn btn-info" data-toggle="tooltip"
                    data-placement="top" title="{{ __('guides.tooltips.edit') }}">
                    <i class="fas fa-pen"></i>
                  </a>

                  <form action="{{ route('admin.guides.destroy', $guide) }}" method="POST"
                    id="delete-form-{{ $guide->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger"
                      onclick="confirmDelete('delete-form-{{ $guide->id }}')" data-toggle="tooltip"
                      data-placement="top" title="{{ __('guides.tooltips.delete') }}">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>

                  @if ($guide->is_active)
                    <button type="button" class="btn bg-maroon" data-toggle="tooltip" data-placement="top"
                      title="{{ __('guides.tooltips.deactivate') }}" onclick="deactivateGuide(event, '{{ $guide->id }}')">
                      <i class="fas fa-toggle-on"></i>
                    </button>
                  @else
                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                      title="{{ __('guides.tooltips.activate') }}" onclick="activateGuide(event, '{{ $guide->id }}')">
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
            <th> {{ __('guides.table.headers.id') }} </th>
            <th> {{ __('guides.table.headers.title') }} </th>
            <th> {{ __('guides.table.headers.guide_category') }} </th>
            <th> {{ __('guides.table.headers.is_active') }} </th>
            <th class="text-center"> {{ __('guides.table.headers.actions') }} </th>
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
            data: 'category.name',
            name: 'category.name'
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
          title: '{{ __('guides.alerts.success.title') }}',
          text: '{{ session('message') }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      @endif
    });

    function confirmDelete(formId) {
      let form = document.getElementById(formId);

      Swal.fire({
        title: "{{ __('guides.alerts.delete.title') }}",
        text: "{{ __('guides.alerts.delete.text') }}",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "{{ __('guides.alerts.delete.confirm') }}",
        cancelButtonText: "{{ __('guides.alerts.delete.cancel') }}",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    }

    function activateGuide(event, id) {
      this.disabled = true;
      event.preventDefault();
      const activateUrl = "{{ route('admin.guides.activate', ':news') }}";

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

    function deactivateGuide(event, id) {
      // impedir que se vuelva a enviar el formulario
      this.disabled = true;

      // quizás no sea necesario
      // event.preventDefault();

      const deactivateUrl = '{{ route('admin.guides.deactivate', ':news') }}';

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
