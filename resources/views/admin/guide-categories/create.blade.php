@extends('admin.layouts.app')

@section('content-title', __('guide-categories.titles.create'))

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">

        <div class="card-header">
          <h3 class="card-title"> {{ __('guide-categories.titles.create') }} </h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('admin.guide-categories.store') }}"
          enctype="multipart/form-data">

          @csrf

          <div class="card-body">
            <p class="text-bold"><span style="color:red">*</span> {{ __('guide-categories.forms.required-fields') }}</p>
            <hr>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="name" class="col-form-label">
                  {{ __('guide-categories.forms.labels.name') }} <span style="color:red">*</span>
                </label>

                <input id="name" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name', $category->name) }}" placeholder="{{ __('guide-categories.forms.placeholders.name') }}"
                  required autofocus>

                @error('name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right"> {{ __('guide-categories.buttons.save') }} </button>
            <a href="{{ route('admin.guide-categories.index') }}" class="btn btn-danger mr-4 float-right">
              {{ __('guide-categories.buttons.back') }} </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
