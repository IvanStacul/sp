@extends('admin.layouts.app')

@section('content-title', __('ordinances.titles.show'))

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title"> {{ __('ordinances.titles.show') }} </h3>
        </div>

        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-6 row">
              <label class="col-sm-3 col-form-label"> {{ __('ordinances.attributes.number') }} </label>
              <div class="col-sm-9">
                <div class="form-control"> {{ $ordinance->number }} </div>
              </div>
            </div>

            <div class="col-md-6 row">
              <label class="col-sm-3 col-form-label"> {{ __('ordinances.attributes.category_id') }} </label>
              <div class="col-sm-9">
                <div class="form-control"> {{ $ordinance->category->name }} </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6 row">
              <label class="col-sm-3 col-form-label"> {{ __('ordinances.attributes.date') }} </label>
              <div class="col-sm-9">
                <div class="form-control"> {{ $ordinance->date }} </div>
              </div>
            </div>

          </div>

          <div class="form-group row">
            <div class="col-sm-6 offset-sm-3">
              <div class="card card-default files">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-file"></i>
                    {{ __('ordinances.attributes.file') }}
                  </h3>
                </div>

                <div class="card-body">
                  <iframe src="{{ $ordinance->file }}" frameborder="0" width="100%" height="500">
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <a href="{{ route('admin.ordinances.index') }}" class="btn btn-danger mr-4 float-right">
            {{ __('ordinances.buttons.back') }}
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

