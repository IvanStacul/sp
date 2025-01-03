@extends('admin.layouts.app')

@section('content-title', __('ordinances.titles.create'))

@push('styles')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">

        <div class="card-header">
          <h3 class="card-title"> {{ __('ordinances.titles.edit') }} </h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('admin.ordinances.update', $ordinance) }}"
          enctype="multipart/form-data">

          @csrf
          @method('PUT')

          <div class="card-body">
            <p class="text-bold"><span style="color:red">*</span> {{ __('ordinances.forms.required-fields') }}</p>
            <hr>

            <div class="form-group row">
              <div class="col-md-3 col-sm-12">
                <label for="number" class="col-form-label">
                  {{ __('ordinances.forms.labels.number') }} <span style="color:red">*</span>
                </label>

                <input id="number" class="form-control @error('number') is-invalid @enderror" name="number"
                  value="{{ old('number', $ordinance->number) }}" required autofocus type="number"
                  placeholder="{{ __('ordinances.forms.placeholders.number') }}">

                @error('number')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-5 col-sm-12">
                <label for="title" class="col-form-label">
                  {{ __('ordinances.forms.labels.title') }} <span style="color:red">*</span>
                </label>

                <input id="title" class="form-control @error('title') is-invalid @enderror" name="title"
                  value="{{ old('title', $ordinance->title) }}" required
                  placeholder="{{ __('ordinances.forms.placeholders.title') }}">

                @error('title')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-4 col-sm-12">
                <label for="category_id" class="col-form-label">
                  {{ __('ordinances.forms.labels.category_id') }} <span style="color:red">*</span>
                </label>

                <select name="category_id" id="category_id"
                  class="form-control select2 @error('category_id') is-invalid @enderror" required>
                  {{-- <option>{{ __('ordinances.forms.placeholders.category_id') }}</option> --}}
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                      {{ old('category_id', $ordinance->category_id) == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                    </option>
                  @endforeach
                </select>

                @error('category_id')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="col-md-4 col-sm-12">
                <label for="date" class="col-form-label">
                  {{ __('ordinances.forms.labels.date') }} <span style="color:red">*</span>
                </label>

                <input id="date" class="form-control @error('date') is-invalid @enderror" name="date"
                  value="{{ old('date', now()->format('Y-m-d')) }}" required
                  placeholder="{{ __('ordinances.forms.placeholders.date') }}" type="date">

                @error('date')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-4 col-sm-12">
                <label for="file" class="col-form-label">
                  {{ __('ordinances.forms.labels.file') }}
                </label>

                <input id="file" class="form-control @error('file') is-invalid @enderror" name="file"
                  type="file" value="{{ old('file', $ordinance->file) }}" accept=".pdf"
                  placeholder="{{ __('ordinances.forms.placeholders.file') }}">
                <small class="text-muted"> Selecionar un archivo PDF para reemplazar el actual. </small>

                @error('file')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right"> {{ __('ordinances.buttons.save') }} </button>
            <a href="{{ route('admin.ordinances.index') }}" class="btn btn-danger mr-4 float-right">
              {{ __('ordinances.buttons.back') }}
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <!-- Select2 -->
  <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2({
        theme: 'bootstrap4',
      });
    });
  </script>
@endpush
