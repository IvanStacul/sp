@extends('admin.layouts.app')

@section('content-title', __('documents.titles.create'))

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
          <h3 class="card-title"> {{ __('documents.titles.edit') }} </h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('admin.documents.update', $document) }}"
          enctype="multipart/form-data">

          @csrf
          @method('PUT')

          <div class="card-body">
            <p class="text-bold"><span style="color:red">*</span> {{ __('documents.forms.required-fields') }}</p>
            <hr>

            <div class="form-group row">
              <div class="col-md-4 col-sm-12">
                <label for="title" class="col-form-label">
                  {{ __('documents.forms.labels.title') }} <span style="color:red">*</span>
                </label>

                <input id="title" class="form-control @error('title') is-invalid @enderror" name="title"
                  type="text" value="{{ old('title', $document->title) }}" required
                  placeholder="{{ __('documents.forms.placeholders.title') }}">

                @error('title')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-4 col-sm-12">
                <label for="document_category_id" class="col-form-label">
                  {{ __('documents.forms.labels.document_category_id') }} <span style="color:red">*</span>
                </label>

                <select name="document_category_id" id="document_category_id"
                  class="form-control select2 @error('document_category_id') is-invalid @enderror" required>
                  {{-- <option>{{ __('documents.forms.placeholders.document_category_id') }}</option> --}}
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                      {{ old('document_category_id', $document->document_category_id) == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                    </option>
                  @endforeach
                </select>

                @error('document_category_id')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-4 col-sm-12">
                <label for="file" class="col-form-label">
                  {{ __('documents.forms.labels.file') }}
                </label>

                <input id="file" class="form-control @error('file') is-invalid @enderror" name="file"
                  type="file" value="{{ old('file', $document->file) }}" accept=".pdf"
                  placeholder="{{ __('documents.forms.placeholders.file') }}">

                <span>
                  Subir solo si desea cambiar el archivo
                </span>

                @error('file')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12 col-sm-12">
                <label for="description" class="col-form-label">
                  {{ __('documents.forms.labels.description') }}
                </label>

                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                  rows="3" placeholder="{{ __('documents.forms.placeholders.description') }}">{{ old('description', $document->description) }}</textarea>

                @error('description')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right"> {{ __('documents.buttons.save') }} </button>
            <a href="{{ route('admin.documents.index') }}" class="btn btn-danger mr-4 float-right">
              {{ __('documents.buttons.back') }}
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
