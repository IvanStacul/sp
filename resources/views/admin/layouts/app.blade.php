@extends('admin.layouts.base')
@section('base')
  @include('admin.includes.preloader')
  @include('admin.includes.navbar')
  @include('admin.includes.sidebar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('content-title')</h1>
          </div>

          {{-- breadcrumb --}}
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> --}}
          {{-- /breadcrumb --}}
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        @yield('main-content')
      </div>
    </section>
  </div>

  @include('admin.includes.footer')
  @include('admin.includes.control-sidebar')
@endsection
