@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8">
    <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/dise%C3%B1o%20sin%20t%C3%ADtulo(5)-1617429744.webp"
      loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center" />

    {{-- <div class="absolute inset-0 bg-green-400 mix-blend-multiply"></div> --}}

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-7xl text-gray-50 font-bold md:mb-8">
          Ordenanzas
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section id="news" class="text-gray-50 px-8 antialiased md:px-16">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        @if ($docs->count() > 0)
          <div class="px-4 md:px-6 lg:px-8">
            <div class="space-y-2 text-center">
              <h2 class="text-3xl font-bold tracking-tight sm:text-4xl  text-gray-800"> Documentación </h2>
              <p class="text-muted-foreground md:text-lg text-gray-800">
                Conoce los documentos oficiales de la institución.
              </p>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-3">
              @foreach ($docs as $doc)
                <div class="max-w-xs flex flex-col bg-white border border-t-4 border-t-green-600/95 shadow-sm rounded-xl">
                  <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800">
                      {{ $doc->title }}
                    </h3>
                    <p class="mt-2 text-gray-500">
                      {{ $doc->description }}
                    </p>
                    <a href="{{ $doc->file }}" target="_blank"
                      class="mt-3 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600/95 text-white hover:bg-green-800 hover:!text-gray-100 focus:outline-none focus:bg-green-900 disabled:opacity-50 disabled:pointer-events-none">
                      Ver Documento
                      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </a>

                  </div>
                </div>
              @endforeach
            </div>

            {{-- pagination --}}
            <div class="mt-8">
              {{ $docs->links('vendor.pagination.tailwind-ordenanzas', ['category' => request()->category, 'search' => request()->search, 'year' => request()->year]) }}
            </div>
          </div>
        @endif
      </div>
    </div>
  </section>
@endsection
