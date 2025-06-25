@extends('admin.layouts.app')

@section('content-title', __('edicts.titles.create'))

@push('styles')
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <style>
    #editor {
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
          <h3 class="card-title"> {{ __('edicts.titles.create') }} </h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('admin.edicts.store') }}" enctype="multipart/form-data"
          id="edict-form">
          @csrf
          <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <p class="text-bold"><span style="color:red">*</span> {{ __('edicts.forms.required-fields') }}</p>
            <hr>

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
                  name="publish_date" value="{{ old('publish_date', now()->format('Y-m-d')) }}"
                  type="date">
                @error('publish_date')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-end">
                <div class="icheck-primary">
                  <input type="checkbox" id="is_active" checked="" name="is_active">
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
                <input type="hidden" name="content" id="content">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <label for="editor" class="col-form-label">
                  {{ __('edicts.forms.labels.content') }} <span style="color:red">*</span>
                </label>
                <div id="editor"></div>
                @error('content')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right"> {{ __('edicts.buttons.save') }} </button>
            <a href="{{ route('admin.edicts.index') }}" class="btn btn-danger mr-4 float-right">
              {{ __('edicts.buttons.back') }}
            </a>
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
      'uploadAttachmentEndpoint' => route('admin.editor.uploadAttachment'),
  ])

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      function generateSlug(str) {
        return str
          .toLowerCase()
          .trim()
          .replace(/[^\w\s-]/g, '')
          .replace(/[\s_-]+/g, '-')
          .replace(/^-+|-+$/g, '');
      }

      document.getElementById('title').addEventListener('input', function() {
        const title = this.value;
        const slug = generateSlug(title);

        let slugInput = document.getElementById('slug');
        if (!slugInput) {
          slugInput = document.createElement('input');
          slugInput.type = 'hidden';
          slugInput.name = 'slug';
          slugInput.id = 'slug';
          this.parentNode.appendChild(slugInput);
        }
        slugInput.value = slug;
      });
    });
  </script>
@endpush
