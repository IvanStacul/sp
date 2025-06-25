@extends('admin.layouts.app')

@push('styles')
  <style>
    .form-check.form-check-inline {
      margin-right: 15px !important;
    }
  </style>
@endpush

@section('content-title', __('edicts.titles.edit'))

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{ __('edicts.titles.edit') }}</h3>
        </div>

            <form action="{{ route('admin.edicts.update', $edict) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="card-body">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="title" class="col-form-label">
                      {{ __('edicts.forms.labels.title') }} <span style="color:red">*</span>
                    </label>
                    <input id="title" class="form-control @error('title') is-invalid @enderror" name="title"
                      value="{{ old('title', $edict->title) }}" required autofocus
                      placeholder="{{ __('edicts.forms.placeholders.title') }}">
                    @error('title')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="slug" class="col-form-label">
                      {{ __('edicts.forms.labels.slug') }} <span style="color:red">*</span>
                    </label>
                    <input id="slug" class="form-control @error('slug') is-invalid @enderror" name="slug"
                      value="{{ old('slug', $edict->slug) }}" required readonly>
                    @error('slug')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6 col-sm-12">
                    <label for="publish_date" class="col-form-label">
                      {{ __('edicts.forms.labels.publish_date') }}
                    </label>
                    <input id="publish_date" class="form-control @error('publish_date') is-invalid @enderror"
                      name="publish_date" value="{{ old('publish_date', $edict->publish_date ? $edict->publish_date->format('Y-m-d') : '') }}"
                      type="date">
                    @error('publish_date')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-end">
                    <div class="icheck-primary">
                      <input type="checkbox" id="is_active" name="is_active" {{ old('is_active', $edict->is_active) ? 'checked' : '' }}>
                      <label for="is_active">
                        {{ __('edicts.forms.labels.is_active') }} <span style="color:red">*</span>
                      </label>
                    </div>
                    @error('is_active')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="content" class="col-form-label">
                      {{ __('edicts.forms.labels.content') }} <span style="color:red">*</span>
                    </label>
                    <div id="editor" class="@error('content') is-invalid @enderror"></div>
                    <input type="hidden" name="content" id="content" value="{{ old('content', json_encode($edict->content)) }}">
                    @error('content')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <hr>

                <div class="row">
                  <div class="col-12">
                    <small class="text-muted">{{ __('edicts.forms.required-fields') }}</small>
                  </div>
                </div>

              </div>

              <div class="card-footer">
                <div class="row">
                  <div class="col-12">
                    <a href="{{ route('admin.edicts.index') }}" class="btn btn-secondary">
                      {{ __('edicts.buttons.back') }}
                    </a>
                    <input type="submit" value="{{ __('edicts.buttons.update') }}" class="btn btn-success float-right">
                  </div>
                </div>
              </div>

                        </form>
        </div>
      </div>
    </div>
  @endsection

@push('scripts')
  @include('admin.includes.editorjs', [
      'editorId' => '#editor',
      'inputId' => '#content',
      'uploadAttachmentEndpoint' => route('admin.editor.upload-attachment'),
  ])

  <script>
    document.getElementById('title').addEventListener('input', function() {
      let title = this.value;
      let slug = title.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
        .trim()
        .replace(/\s+/g, '-') // Replace spaces with hyphens
        .replace(/-+/g, '-'); // Replace multiple hyphens with single hyphen

      document.getElementById('slug').value = slug;
    });
  </script>
@endpush
