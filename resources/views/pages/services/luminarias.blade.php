@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8">
    <img src="https://v0.dev/placeholder.svg?height=400&width=1200" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <!-- overlay - start -->
    <!-- <div class="absolute inset-0 bg-green-400 mix-blend-multiply"></div> -->
    <!-- overlay - end -->

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-7xl text-gray-800 md:mb-8">
          Cambios de luminarias
        </h2>
      </div>

    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">
      <p class="text-lg !text-gray-800">
        Si necesitás un cambio de luminaria en tu calle, debés acercarte a la Secretaría de Obras Públicas (calle 19
        esquina 28) de lunes a viernes de 7:00 a 13:00hs con DNI y nota solicitando arreglos y/o mejoras del alumbrado
        público. También puede presentarse en Mesa de Entrada (calle 14 esquina 17) siempre que se de aviso posterior a la
        Secretaría de Obras Públicas posteriormente.
      </p>
    </div>
  </section>
@endsection
