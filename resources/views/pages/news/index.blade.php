@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8">
    <img src="https://saenzpena.gob.ar/wp-content/uploads/2019/02/noticias.jpg" loading="lazy" alt=""
      class="absolute inset-0 h-full w-full object-cover object-center" />

    {{-- <div class="absolute inset-0 bg-green-400 mix-blend-multiply"></div> --}}

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-7xl text-gray-50 font-bold md:mb-8">
          Noticias
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section id="news" class="text-gray-50 px-8 antialiased md:px-16">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach ($news as $n)
            <a href="{{ route('news.show', $n) }}"
              class="border bg-white rounded-lg overflow-hidden shadow transition-shadow duration-300 hover:shadow-lg cursor-pointer">
              <img src="{{ $n->cover_image }}" alt="{{ $n->title }}" class="w-full h-48 object-cover" />

              <div class="p-4">
                <time class="text-xs text-gray-500"> {{ $n->news_date }} </time>
                <h3 class="font-semibold text-lg mb-2 text-gray-800"> {{ $n->title }} </h3>
                <p class="text-sm text-gray-600 mb-2"> {{ $n->summary }} </p>
              </div>
            </a>
          @endforeach

        </div>

        <div class="mt-8 text-center">
          {{ $news->onEachSide(1)->links() }}
        </div>
      </div>
    </div>
  </section>
@endsection
