@extends('admin.layouts.app')

@section('content-title', __('document-categories.titles.create'))

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">

        <div class="card-header">
          <h3 class="card-title"> {{ __('document-categories.titles.create') }} </h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('admin.document-categories.store') }}"
          enctype="multipart/form-data">

          @csrf

          <div class="card-body">
            <p class="text-bold"><span style="color:red">*</span> {{ __('document-categories.forms.required-fields') }}</p>
            <hr>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="name" class="col-form-label">
                  {{ __('document-categories.forms.labels.name') }} <span style="color:red">*</span>
                </label>

                <input id="name" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name', $documentCategory->name) }}" placeholder="{{ __('document-categories.forms.placeholders.name') }}"
                  required autofocus>

                @error('name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right"> {{ __('document-categories.buttons.save') }} </button>
            <a href="{{ route('admin.document-categories.index') }}" class="btn btn-danger mr-4 float-right">
              {{ __('document-categories.buttons.back') }} </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
