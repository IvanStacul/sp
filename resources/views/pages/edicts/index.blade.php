

@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/ordenanzas.webp') }}" loading="lazy" alt=""
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-5xl text-gray-50 font-bold md:mb-8 xl:text-6xl 2xl:text-7xl">
          Edictos Municipales
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section id="news" class="text-gray-50 px-8 antialiased md:px-16">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        @if ($edicts->count() > 0)
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach ($edicts as $edict)
              <div
                class="bg-white rounded-lg shadow-lg overflow-hidden border-l-4 border-l-green-500 hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                  <div class="mb-3">
                    <time class="text-sm text-green-600 font-semibold bg-green-50 px-2 py-1 rounded">
                      {{ $edict->edict_date }}
                    </time>
                  </div>

                  <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-green-600 transition-colors">
                    <a href="{{ route('edicts.show', $edict) }}" class="hover:text-gray-900">{{ $edict->title }}</a>
                  </h2>

                  <div class="flex items-center justify-between">
                    <a href="{{ route('edicts.show', $edict) }}"
                      class="inline-flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-lg hover:bg-green-600 transition-colors duration-300 hover:text-white">
                      Leer más
                      <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <div class="flex justify-center">
            {{ $edicts->links() }}
          </div>
        @else
          <div class="text-center py-16">
            <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-6">
              <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                </path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">No hay edictos disponibles</h3>
            <p class="text-gray-600">No se encontraron edictos municipales en este momento.</p>
          </div>
        @endif
      </div>
    </div>
  </section>
@endsection
