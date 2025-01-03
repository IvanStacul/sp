@extends('admin.layouts.app')

@section('content-title', __('news.titles.show'))

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title"> {{ __('news.titles.show') }} </h3>
        </div>

        <div class="card-body">
          <main>
            <!--Blog single start-->
            <div class="py-xl-9 py-4">
              <div class="container">
                <div class="row">
                  <article class="col-lg-8 offset-lg-2">
                    <h1> {{ $news->title }} </h1>
                    <p class="font-weight-light" style="font-size: 1.25rem;"> {{ $news->summary }} </p>
                    <div class="row">
                      <div class="col-sm-6">
                      </div>

                      <div class="col-md-6 d-flex justify-content-end">
                        <time class="text-muted">Publicado el {{ $news->publish_date }}</time>
                      </div>
                    </div>

                    <figure class="my-3">
                      <img src="{{ $news->cover_image }}" alt="blog"
                        class="rounded img-fluid w-100">
                    </figure>

                    <div class="mt-6 container">
                      @foreach ($news->content['blocks'] as $block)
                        {{ \App\View\Components\Editorjs\Factory::make($block)->render() }}
                      @endforeach
                    </div>

                  </article>
                </div>
              </div>
            </div>
            <!--Blog single end-->
          </main>
        </div>

        <div class="card-footer">
          <a href="{{ route('admin.news.index') }}" class="btn btn-danger mr-4 float-right">
            {{ __('news.buttons.back') }}
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
