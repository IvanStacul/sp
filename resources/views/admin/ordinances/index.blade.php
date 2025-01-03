@extends('admin.layouts.app')

@push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content-title', __('ordinances.titles.index'))

@section('main-content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> {{ __('ordinances.titles.index') }} </h3>
      <div class="card-tools">
        <a href="{{ route('admin.ordinances.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> {{ __('ordinances.actions.create') }}
        </a>
      </div>
    </div>

    <div class="card-body">
      <table id="ordinances-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th> {{ __('ordinances.table.headers.id') }} </th>
            <th> {{ __('ordinances.table.headers.number') }} </th>
            <th> {{ __('ordinances.table.headers.date') }} </th>
            <th> {{ __('ordinances.table.headers.category_id') }} </th>
            <th> {{ __('ordinances.table.headers.is_active') }} </th>
            <th class="text-center"> {{ __('ordinances.table.headers.actions') }} </th>
          </tr>
        </thead>

        <tbody>
          @foreach ($ordinances as $ordinance)
            <tr>
              <td>{{ $ordinance->id }}</td>
              <td>{{ $ordinance->number }}</td>
              <td> {{ $ordinance->date }} </td>
              <td> {{ $ordinance->category->name }} </td>
              <td class="text-center">
                <span class="badge badge-{{ $ordinance->is_active ? 'success' : 'danger' }}">
                  {{ $ordinance->is_active ? __('ordinances.table.values.is_active.true') : __('ordinances.table.values.is_active.false') }}
                </span>
              </td>
              <td>
                <div class="d-flex justify-content-around">
                  <a href="{{ route('admin.ordinances.show', $ordinance) }}" class="btn btn-primary"
                    data-toggle="tooltip" data-placement="top" title="{{ __('ordinances.tooltips.show') }}">
                    <i class="fas fa-eye"></i>
                  </a>

                  <a href="{{ route('admin.ordinances.edit', $ordinance) }}" class="btn btn-info" data-toggle="tooltip"
                    data-placement="top" title="{{ __('ordinances.tooltips.edit') }}">
                    <i class="fas fa-pen"></i>
                  </a>

                  <form action="{{ route('admin.ordinances.destroy', $ordinance) }}" method="POST"
                    id="delete-form-{{ $ordinance->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger"
                      onclick="confirmDelete('delete-form-{{ $ordinance->id }}')" data-toggle="tooltip"
                      data-placement="top" title="{{ __('ordinances.tooltips.delete') }}">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>

                  @if ($ordinance->is_active)
                    <button type="button" class="btn bg-maroon" data-toggle="tooltip" data-placement="top"
                      title="{{ __('ordinances.tooltips.deactivate') }}"
                      onclick="deactivateOrdinance(event, {{ $ordinance->id }})">
                      <i class="fas fa-toggle-on"></i>
                    </button>
                  @else
                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                      title="{{ __('ordinances.tooltips.activate') }}"
                      onclick="activateOrdinance(event, {{ $ordinance->id }})">
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
            <th> {{ __('ordinances.table.headers.id') }} </th>
            <th> {{ __('ordinances.table.headers.number') }} </th>
            <th> {{ __('ordinances.table.headers.date') }} </th>
            <th> {{ __('ordinances.table.headers.category_id') }} </th>
            <th> {{ __('ordinances.table.headers.is_active') }} </th>
            <th class="text-center"> {{ __('ordinances.table.headers.actions') }} </th>
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
      $('#ordinances-table').DataTable({
        columns: [{
            data: 'id',
            name: 'id'
          },
          {
            data: 'number',
            name: 'number'
          },
          {
            data: 'date',
            name: 'date'
          },
          {
            data: 'category_id',
            name: 'category_id'
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
        order: []
      });

      $('[data-toggle="tooltip"]').tooltip();

      @if (session()->has('message'))
        Swal.fire({
          title: '{{ __('ordinances.alerts.success.title') }}',
          text: '{{ session('message') }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      @endif
    });

    function confirmDelete(formId) {
      let form = document.getElementById(formId);

      Swal.fire({
        title: "{{ __('ordinances.alerts.delete.title') }}",
        text: "{{ __('ordinances.alerts.delete.text') }}",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "{{ __('ordinances.alerts.delete.confirm') }}",
        cancelButtonText: "{{ __('ordinances.alerts.delete.cancel') }}",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    }

    function activateOrdinance(event, id) {
      this.disabled = true;
      event.preventDefault();
      const activateUrl = "{{ route('admin.ordinances.activate', ':ordinance') }}";

      // mostrar modal de carga
      $('#loading-modal').modal('show');

      // hacer la petición ajax
      const axiosInstance = axios.create();
      axiosInstance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
      axiosInstance.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]')
        .getAttribute('content');

      axiosInstance.post(activateUrl.replace(':ordinance', id))
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

    function deactivateOrdinance(event, id) {
      // impedir que se vuelva a enviar el formulario
      this.disabled = true;

      // quizás no sea necesario
      // event.preventDefault();

      const deactivateUrl = '{{ route('admin.ordinances.deactivate', ':ordinance') }}';

      // mostrar modal de carga
      $('#loading-modal').modal('show');

      // hacer la petición ajax
      const axiosInstance = axios.create();
      axiosInstance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
      axiosInstance.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]')
        .getAttribute('content');

      axiosInstance.post(deactivateUrl.replace(':ordinance', id))
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
