@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/funcionarios.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

      <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      </div>

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-50 md:mb-8">
          Intendencia
        </h2>
      </div>

      <div>
        <p class="text-xl text-gray-50">
          La Intendencia de la Ciudad de Presidencia Roque Sáenz Peña tiene como objetivo principal tener a su cargo el cumplimiento de todo lo relativo al régimen municipal. Representar a la Municipalidad de Sáenz Peña ante su comunidad y ante otros municipios y comunas.
        </p>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-6xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-7xl">
      <div class="space-y-5 md:space-y-8">
        {{-- Funciones --}}
        <div class="bg-white py-6 sm:py-8 lg:py-12">
          <div class="mx-auto">
            <div class="md:flex md:flex-row md:gap-8 md:items-center md:justify-center">
              <div class="md:flex-shrink-0 ">
                <img
                  src="{{ asset('assets/img/bruno-cipolini.png') }}"
                  alt="Foto del funcionario" class="h-48 w-full object-cover md:w-48 rounded-lg">
              </div>

              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-green-700 font-semibold">Intendente</div>
                <h2 class="mt-2 text-2xl font-bold">Bruno Luis Cipolini</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Mariano Moreno 801, Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
