@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/sustentable.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-50 md:mb-8 xl:text-6xl">
          Compostaje Comunitario
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl grid grid-cols-1 gap-4">
      <p class="text-lg !text-gray-800">
        En el marco de acciones de mitigación frente al cambio climático, el municipio puso en marcha el programa de Compostaje Comunitario, con la colaboración del INTA Sáenz Peña.
      </p>
      <p class="text-lg !text-gray-800">
        Busca promover la reconversión de residuos orgánicos en fertilizante natural para jardines y huertas familiares a través de la participación de vecinos.
      </p>
      <p class="text-lg !text-gray-800">
        <b>Punto de compostaje:</b> Plaza 9 de Julio del Barrio Jardín.
      </p>
    </div>
  </section>
@endsection
