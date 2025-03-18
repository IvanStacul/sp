@extends('admin.layouts.app')

@push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content-title', __('documents.titles.index'))

@section('main-content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> {{ __('documents.titles.index') }} </h3>
      <div class="card-tools">
        <a href="{{ route('admin.documents.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> {{ __('documents.actions.create') }}
        </a>
      </div>
    </div>

    <div class="card-body">
      <table id="ordinances-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th> {{ __('documents.table.headers.id') }} </th>
            <th> {{ __('documents.table.headers.title') }} </th>
            <th> {{ __('documents.table.headers.description') }} </th>
            <th> {{ __('documents.table.headers.document_category_id') }} </th>
            <th class="text-center"> {{ __('documents.table.headers.actions') }} </th>
          </tr>
        </thead>

        <tbody>
          @foreach ($documents as $document)
            <tr>
              <td>{{ $document->id }}</td>
              <td>{{ $document->title }}</td>
              <td> {{ $document->description }} </td>
              <td> {{ $document->category->name }} </td>

              <td>
                <div class="d-flex justify-content-around">
                  <a href="{{ route('admin.documents.edit', $document) }}" class="btn btn-info" data-toggle="tooltip"
                    data-placement="top" title="{{ __('documents.tooltips.edit') }}">
                    <i class="fas fa-pen"></i>
                  </a>

                  <form action="{{ route('admin.documents.destroy', $document) }}" method="POST"
                    id="delete-form-{{ $document->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger"
                      onclick="confirmDelete('delete-form-{{ $document->id }}')" data-toggle="tooltip"
                      data-placement="top" title="{{ __('documents.tooltips.delete') }}">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>

        <tfoot>
          <tr>
            <th> {{ __('documents.table.headers.id') }} </th>
            <th> {{ __('documents.table.headers.title') }} </th>
            <th> {{ __('documents.table.headers.description') }} </th>
            <th> {{ __('documents.table.headers.document_category_id') }} </th>
            <th class="text-center"> {{ __('documents.table.headers.actions') }} </th>
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
            data: 'title',
            name: 'title'
          },
          {
            data: 'description',
            name: 'description'
          },
          {
            data: 'category.name',
            name: 'category.name'
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
          title: '{{ __('documents.alerts.success.title') }}',
          text: '{{ session('message') }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      @endif
    });

    function confirmDelete(formId) {
      let form = document.getElementById(formId);

      Swal.fire({
        title: "{{ __('documents.alerts.delete.title') }}",
        text: "{{ __('documents.alerts.delete.text') }}",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "{{ __('documents.alerts.delete.confirm') }}",
        cancelButtonText: "{{ __('documents.alerts.delete.cancel') }}",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    }
  </script>
@endpush
