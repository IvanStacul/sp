@extends('admin.layouts.app')

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content-title', __('guide-categories.titles.index'))

@section('main-content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> {{ __('guide-categories.titles.index') }} </h3>
      <div class="card-tools">
        <a href="{{ route('admin.guide-categories.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> {{ __('guide-categories.actions.create') }}
        </a>
      </div>
    </div>

    <div class="card-body">
      <table id="topics-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th> {{ __('guide-categories.table.headers.id') }} </th>
            <th> {{ __('guide-categories.table.headers.name') }} </th>
            <th> {{ __('guide-categories.table.headers.description') }} </th>
            <th class="text-center"> {{ __('guide-categories.table.headers.actions') }} </th>
          </tr>
        </thead>

        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->description }}</td>
              <td>
                <div class="d-flex justify-content-around">
                  <a href="{{ route('admin.guide-categories.edit', $category) }}" class="btn btn-info" data-toggle="tooltip"
                    data-placement="top" title="{{ __('guide-categories.tooltips.edit') }}">
                    <i class="fas fa-pen"></i>
                  </a>

                  <form action="{{ route('admin.guide-categories.destroy', $category) }}" method="POST" id="delete-form-{{ $category->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="confirmDelete('delete-form-{{ $category->id }}')" data-toggle="tooltip"
                      data-placement="top" title="{{ __('guide-categories.tooltips.delete') }}">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>

                  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                    title="{{ __('guide-categories.tooltips.activate') }}">
                    <i class="fas fa-toggle-on"></i>
                  </button>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>

        <tfoot>
          <tr>
            <th> {{ __('guide-categories.table.headers.id') }} </th>
            <th> {{ __('guide-categories.table.headers.name') }} </th>
            <th> {{ __('guide-categories.table.headers.description') }} </th>
            <th class="text-center"> {{ __('guide-categories.table.headers.actions') }} </th>
          </tr>
        </tfoot>
      </table>
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
      $('#topics-table').DataTable({
        columns: [{
            data: 'id',
            name: 'id'
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'description',
            name: 'description'
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
        }
      });

      $('[data-toggle="tooltip"]').tooltip();

      @if (session()->has('message'))
        Swal.fire({
          title: '{{ __('guide-categories.alerts.success.title') }}',
          text: '{{ session('message') }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      @endif
    });

    function confirmDelete(formId) {
      let form = document.getElementById(formId);

      Swal.fire({
        title: "{{ __('guide-categories.alerts.delete.title') }}",
        text: "{{ __('guide-categories.alerts.delete.text') }}",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "{{ __('guide-categories.alerts.delete.confirm') }}",
        cancelButtonText: "{{ __('guide-categories.alerts.delete.cancel') }}",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    }
  </script>
@endpush
