@extends('admin.layouts.app')

@section('content-title', __('edicts.titles.show'))

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ __('edicts.titles.show') }}</h3>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <h2>{{ $edict->title }}</h2>
              @if($edict->summary)
                <p class="lead">{{ $edict->summary }}</p>
              @endif
              <p><strong>Fecha de publicación:</strong> {{ $edict->edict_date }}</p>
              <p><strong>Estado:</strong>
                @if($edict->is_active)
                  <span class="badge badge-success">Activo</span>
                @else
                  <span class="badge badge-danger">Inactivo</span>
                @endif
              </p>

              <hr>

                             <div class="content">
                 @foreach($edict->content['blocks'] ?? [] as $block)
                   {{ \App\View\Components\Editorjs\Factory::make($block)->render() }}
                 @endforeach
               </div>
            </div>

            @if($edict->cover_image)
            <div class="col-md-4">
              <img src="{{ $edict->cover_image }}" alt="{{ $edict->title }}" class="img-fluid rounded">
            </div>
            @endif
          </div>
        </div>

        <div class="card-footer">
          <a href="{{ route('admin.edicts.edit', $edict) }}" class="btn btn-warning">
            <i class="fas fa-edit"></i> {{ __('edicts.actions.edit') }}
          </a>
          <a href="{{ route('admin.edicts.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> {{ __('edicts.buttons.back') }}
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
